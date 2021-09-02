<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AddUserRequest;
use Illuminate\Support\Facades\Validator;

class OnlineApplicationController extends Controller
{
    /*
    |-------------------------------------------------------------------------------
    | Adds a Application
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/onboarding
    | Method:         POST
    | Description:    Adds a new client to the application
    */

    public function onBoarding(Request $request)
    {
        $rules = array(
            'first_name'                => 'required',
            'last_name'                 => 'required',
            'gender'                    => 'required',
            'date_of_birth'             => 'required',
            'nationality'               => 'required',
            'civil_status'              => 'required',
            'email'                     => 'required',
            'contact_no'                => 'required',
            'permanent_address_1'       => 'required',
            'permanent_state'           => 'required',
            'permanent_address_2'       => 'required',
            'permanent_postal_code'     => 'required',
            'permanent_city'            => 'required',
            'permanent_country_code'    => 'required',
            'present_address_1'         => 'required',
            'present_state'             => 'required',
            'present_address_2'         => 'required',
            'present_postal_code'       => 'required',
            'present_city'              => 'required',
            'present_country_code'      => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return response(['message' => $validator->errors()]);
        }

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
            'permanent_postal_code'   => $request->permanent_postal_code,
            'permanent_country_code'  => $request->permanent_country_code,

            'present_address_1'     => ucwords($request->pres_address_1),
            'present_address_2'     => ucwords($request->pres_address_2),
            'present_city'          => ucwords($request->pres_city),
            'present_state'         => ucwords($request->pres_state),
            'present_postal_code'   => $request->present_postal_code,
            'present_country_code'  => $request->present_country_code
        ]);

        //Do not assign a role as the client is on approval process
        // $user->assignRole($request->role);

        // Mail::to('Cloudways@Cloudways.com')->queue(new Reservation($user));

        return response(['message' => 'Application Send Successfully', 'user' => $user]);
    }
}
