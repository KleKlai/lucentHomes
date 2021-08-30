<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(BankSeeder::class);

        $user = User::create([
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
            'status'                => 'Verified'
        ]);

        $user->assignRole('admin');

        Product::create([
            'name'      => 'Sea Side',
            'price'     => 1900000
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
