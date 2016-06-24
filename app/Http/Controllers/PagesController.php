<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }

    public function companies()
    {
        return view('pages.companies');
    }

    public function master()
    {
        return view('master');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
}
