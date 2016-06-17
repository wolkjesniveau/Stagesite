<?php

namespace App\Http\Controllers;

use App\Tool;
use Dotenv\Validator;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

class ToolsController extends Controller
{
    /**
     * @return $this
     */
    public function Index()
    {
        return view('tools.index')->with('tools', Tool::all());
    }

    /**
     * @param $id
     * @return $this
     */
    public function Edit($id)
    {
        // return our view and tool information
        return View('tools.edit') // pulls app/views/tools.edit.blade.php
        ->with('tools', \App\Tool::find($id));

    }
    public function Create()
    {
        return View('tools.create');
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
            'naam'       => 'required',
            'omschrijving'      => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('tools.create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $tools = new Tool();
            $tools->naam       = Input::get('naam');
            $tools->omschrijving      = Input::get('omschrijving');
            $tools->save();

            // redirect
            Session::flash('message', 'Successfully created Tool!');
            return Redirect::to('toolsIndex');
    }}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function Show($id)
    {
        // get the Tool
        $tools = Tool::find($id);

        // show the view and pass the tool to it
        return View('tools.show')
            ->with('tools', $tools);
    }

    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'naam'              => 'required',
            'omschrijving'      => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('nerds/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $tools = Tool::find($id);
            $tools->naam       = Input::get('naam');
            $tools->omschrijving      = Input::get('omschrijving');
            $tools->save();

            // redirect
            Session::flash('message', 'Successfully updated Tool!');
            return Redirect::to('toolsIndex');
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
        $tools = Tool::find($id);
        $tools->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the tool!');
        return Redirect::to('toolsIndex');
    }

}
