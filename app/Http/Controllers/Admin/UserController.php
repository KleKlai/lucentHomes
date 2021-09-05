<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\AddUserRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = cache()->remember('users', now()->addMinutes(30), function() {
            return User::with('Roles')->select('id','first_name', 'last_name', 'email', 'permanent_country_code')->get();
        });

        // $users = User::with('Roles')->select('id','first_name', 'last_name', 'email', 'permanent_country_code')->get();

        return view('admin.management.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // cache()->flush();

        $countrys = cache()->remember('countrys', now()->addMinutes(30), function() {
            return Http::get('https://restcountries.eu/rest/v2/all')->json();
        });


        return view('admin.management.user.create', compact('countrys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddUserRequest $request)
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

        //Assign Role
        $user->assignRole($request->role);
        \Session::flash('Success', ' Congratulations, '. $user->last_name . ' account has been successfully created.');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // $countrys = [];
        $countrys = cache()->remember('countrys', now()->addMinutes(30), function() {
            return Http::get('https://restcountries.eu/rest/v2/all')->json();
        });

        return view('admin.management.user.edit', compact('user', 'countrys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AddUserRequest $request, User $user)
    {
        $user->update([
            'first_name'    => ucwords($request->first_name),
            'last_name'     => ucwords($request->last_name),
            'email'         => $request->email,
            'contact_no'    => $request->contact_no,
            'gender'        => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'tin'           => $request->tin,
            'nationality'   => ucwords($request->nationality),
            'civil_status'  => $request->civil_status,
            'address_1'     => ucwords($request->address_1),
            'address_2'     => ucwords($request->address_2),
            'city'          => ucwords($request->city),
            'state'         => ucwords($request->state),
            'postal_code'   => $request->postcode,
            'country_code'  => $request->country
        ]);

        //Assign Role
        $user->syncRoles($request->role);

        \Session::flash('Success', $user->last_name . ' account has been successfully modify.');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
