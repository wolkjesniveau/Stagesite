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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function Show($id)
    {
        //
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
