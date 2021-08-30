<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function guard()
    {
        if(\Auth::user()->hasRole('admin')) {
            return view('admin.dashboard');
        } elseif (\Auth::user()->hasRole('client')) {
            return view('client.dashboard');
        } else {
            abort(403);
        }
    }
}
