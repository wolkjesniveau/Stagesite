<?php

namespace App\Http\Controllers;

use App\Internship;
use App\Study;
use App\Tool;
use App\Tools;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.admin');
    }

    public function internshipAdmin()
    {
        return view('admin.internship')->with('internships', Internship::all());
    }


    public function companiesAdmin()
    {
        return view('admin.companiesAdmin');
    }
    public function schoolsAdmin()
    {
        return view('admin.schoolsAdmin');
    }

    public function usersAdmin()
    {
        
        return view('admin.users')->with('users', User::all());
    }
}