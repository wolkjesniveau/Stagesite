<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use View;
use Validator;
use Input;
use Redirect;
use Session;

use App\Http\Requests;

class SchoolController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all the schools
        $schools = School::all();

        // load the view and pass the schools
        return View::make('schools.index')
            ->with('schools', $schools);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // load the create form (app/views/schools/create.blade.php)
        return View::make('schools.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('schools/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $school = new School;
            $school->name       = Input::get('name');
            $school->save();

            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('schools');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // get the school
        $school = School::find($id);

        // show the view and pass the school to it
        return View::make('schools.show')
            ->with('school', $school);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // get the school
        $school = School::find($id);

        // show the edit form and pass the nerd
        return View::make('schools.edit')
            ->with('school', $school);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('schools/edit/' . $id)
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $school = School::find($id);
            $school->name       = Input::get('name');
            $school->save();

            // redirect
            Session::flash('message', 'Successfully updated school!');
            return Redirect::to('schools');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // delete
        $school = School::find($id);
        $school->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the school!');
        return Redirect::to('schools');
    }
}
