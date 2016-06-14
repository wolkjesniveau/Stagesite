<?php

namespace App\Http\Controllers;

use App\Company;
use App\Contacts;
use App\Http\Requests;
use App\Internship;
use App\School;
use App\Status;
use App\Study;
use App\User;

class PagesController extends Controller
{
    public function welcome()
    {
//        $contact = Contacts::find(1);
//        dd($contact->company);

//        $study = Study::find(1);
//        dd($study->school_location->school);

        $user = User::find(1);
        dd($user->Contact);
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

    public function admin()
    {
        return view('admin.admin');
    }

    public function internshipAdmin()
    {
        return view('admin.internshipAdmin');
    }

    public function studiesAdmin()
    {
        return view('admin.studiesAdmin');
    }

    public function companiesAdmin()
    {
        return view('admin.companies');
    }

    public function schoolsAdmin()
    {
        return view('admin.schools');
    }
}
