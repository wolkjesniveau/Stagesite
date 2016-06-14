<?php

namespace App\Http\Controllers;

use App\Internship;
use App\Study;
use App\Tool;
use App\Tools;
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


    public function companies()
    {
        return view('admin.companies');
    }
    public function schools()
    {
        return view('admin.schools');
    }
    public function studies()
    {
        return view('admin.studies')->with('studies', Study::all());
    }

    public function toolsAdmin()
    {
        return view('admin.tools')->with('tools', Tool::all());
    }
}
