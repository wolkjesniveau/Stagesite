<?php

namespace App\Http\Controllers;

use App\Study;
use Illuminate\Http\Request;

use App\Http\Requests;

class StudiesController extends Controller
{
    public function studiesAdmin()
    {
        return view('admin.studiesAdmin')->with('studies', Study::all());
    }

}
