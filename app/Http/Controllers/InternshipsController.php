<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InternshipController extends \App\Http\Controllers\Controller {

public function index()
{
$internships = \App\Internship::all();

return View::make('admin.internshipAdmin', compact('internships'));
}

}
