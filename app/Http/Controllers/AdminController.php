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

    /* INTERNSHIP SECTION */
    public function internshipAdmin()
    {
        return view('admin.internship')->with('internships', Internship::all());
    }

    /* SCHOOLS SECTION */
    public function schoolsAdmin()
    {
        return view('admin.schoolsAdmin');
    }

    /* STUDIES SECTION */
    public function studiesAdmin()
    {
        return view('admin.studies')->with('studies', Study::all());
    }


}