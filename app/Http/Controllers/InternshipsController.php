<?php

namespace App\Http\Controllers;

use App\Internship;
use Illuminate\Http\Request;

use App\Http\Requests;

class InternshipController extends Controller {

    public function internshipsAdmin()
    {
        return view('admin.internshipsAdmin')->with('internships', Internship::all());
    }

}
