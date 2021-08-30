<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\AddUserRequest;
use App\Models\User;
use App\Mail\Reservation;
use Illuminate\Support\Facades\Mail;

class OnlineApplication extends Controller
{

    public function onBoarding()
    {
        $countrys = cache()->remember('onBoarding', now()->addMinutes(30), function() {
            return Http::get('https://restcountries.eu/rest/v2/all')->json();
        });
        // $user = User::first();

        // return view('partials.onBoardingSuccess');
        return view('onboarding.onboarding', compact('countrys'));
    }

    public function onBoardingCreate(AddUserRequest $request)
    {
        //Store
        $user = User::create([
            'first_name'    => ucwords($request->first_name),
            'last_name'     => ucwords($request->last_name),
            'email'         => $request->email,
            'password'      => bcrypt('bxtr1605'),
            'contact_no'    => $request->contact_no,
            'gender'        => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'tin'           => $request->tin,
            'nationality'   => ucwords($request->nationality),
            'civil_status'  => $request->civil_status,

            'permanent_address_1'     => ucwords($request->perma_address_1),
            'permanent_address_2'     => ucwords($request->perma_address_2),
            'permanent_city'          => ucwords($request->perma_city),
            'permanent_state'         => ucwords($request->perma_state),
            'permanent_postal_code'   => $request->perma_postcode,
            'permanent_country_code'  => $request->perma_country,

            'present_address_1'     => ucwords($request->pres_address_1),
            'present_address_2'     => ucwords($request->pres_address_2),
            'present_city'          => ucwords($request->pres_city),
            'present_state'         => ucwords($request->pres_state),
            'present_postal_code'   => $request->pres_postcode,
            'present_country_code'  => $request->pres_country
        ]);

        //Do not assign a role as the client is on approval process
        // $user->assignRole($request->role);

        Mail::to('Cloudways@Cloudways.com')->queue(new Reservation($user));

        \Session::flash('Success', 'You successfully reserve your spot at Lucent Homes.');

        return view('partials.onBoardingSuccess');
    }
}
