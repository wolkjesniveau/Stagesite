<?php

namespace App\Http\Controllers;

use App\Tool;
use Illuminate\Http\Request;

use App\Http\Requests;

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
        return View::make('tools.create');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
