<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Fortify\Features;
use Laravel\Jetstream\Jetstream;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        if (! Features::enabled(Features::registration())) {
            return $this->markTestSkipped('Registration support is not enabled.');
        }

        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_registration_screen_cannot_be_rendered_if_support_is_disabled()
    {
        if (Features::enabled(Features::registration())) {
            return $this->markTestSkipped('Registration support is enabled.');
        }

        $response = $this->get('/register');

        $response->assertStatus(404);
    }

    public function test_new_users_can_register()
    {
        if (! Features::enabled(Features::registration())) {
            return $this->markTestSkipped('Registration support is not enabled.');
        }

        $response = $this->post('/register', [
            'first_name'    => Str::random(10),
            'last_name'     => Str::random(10),
            'email'         => 'admin@lucent.homes',
            'password'      => Hash::make('bxtr1605'),
            'contact_no'    => '09952247045',
            'gender'        => 'male',
            'date_of_birth' => '1995-08-04',
            'tin'           => '776-010-328-000',
            'nationality'   => 'Filipino',
            'civil_status'  => 'single',
            'permanent_address_1'     => '12 Dona Vicenta Ave',
            'permanent_address_2'     => 'Poblacion District',
            'permanent_city'          => 'Davao City',
            'permanent_state'         => 'Davao Del Sur',
            'permanent_postal_code'   => '8000',
            'permanent_country_code'  => 'PHL',
            'present_address_1'     => '12 Dona Vicenta Ave',
            'present_address_2'     => 'Poblacion District',
            'present_city'          => 'Davao City',
            'present_state'         => 'Davao Del Sur',
            'present_postal_code'   => '8000',
            'present_country_code'  => 'PHL',
            'status'                => 'Verified',
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature(),
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
