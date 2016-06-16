<?php

namespace App\Http\Controllers;

use App\Tool;
use Illuminate\Http\Request;

use App\Http\Requests;

class ToolsController extends Controller
{

    public function Index()
    {
        return view('tools.index')->with('tools', Tool::all());
    }
    public function Edit()
    {

        // return our view and tool information
        return View('tools.edit') // pulls app/views/tools.edit.blade.php
        ->with('tools', \App\Tool::all());
    }
}
