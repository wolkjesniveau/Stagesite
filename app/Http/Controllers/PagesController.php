<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function company()
    {
        return view('pages.company');
    }

}
