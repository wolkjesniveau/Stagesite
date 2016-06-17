<?php

namespace App\Http\Controllers;

use App\Study;
use Dotenv\Validator;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Symfony\Component\Console\Input\Input;

class StudiesController extends Controller
{
    /**
     * @return $this
     */
    public function Index()
    {
        return view('studies.index')->with('studies', Study::all());
    }

    /**
     * @param $id
     * @return $this
     */
    public function Edit($id)
    {
        // return our view and Study information
        return View('studies.edit')
        ->with('studies', \App\Study::find($id));

    }
    public function Create()
    {
        return View('studies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function Store()
    {
        // validate
        $rules = array(
            'name_study'       => 'required',
        );
        $validator = Validato::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('studies.create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $studies = new Study();
            $studies->name_study      = Input::get('naam');
            $studies->school_location_id      = Input::get('school_location_id');
            $studies->cohort_id      = Input::get('cohort_id');
            $studies->crebo_id      = Input::get('crebo_id');
            $studies->save();

            // redirect
            Session::flash('message', 'Successfully created Study!');
            return Redirect::to('studiesIndex');
        }}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function Show($id)
    {
        // get the Study
        $studies = Study::find($id);

        // show the view and pass the study to it
        return View('studies.show')
            ->with('studies', $studies);
    }

    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name_study'              => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('studyIndex/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $studies = Study::find($id);
            $studies->name_study      = Input::get('naam');
            $studies->school_location_id      = Input::get('school_location_id');
            $studies->cohort_id      = Input::get('cohort_id');
            $studies->crebo_id      = Input::get('crebo_id');
            $studies->save();

            // redirect
            Session::flash('message', 'Successfully updated Study!');
            return Redirect::to('studiesIndex');
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
        $studies = Study::find($id);
        $studies->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the Study!');
        return Redirect::to('studiesIndex');
    }

}
