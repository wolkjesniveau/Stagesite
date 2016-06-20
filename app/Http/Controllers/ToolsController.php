<?php

namespace App\Http\Controllers;

use App\Tool;
use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ToolsController extends Controller
{
    private function validator($input)
    {
        return Validator::make($input, [
            'naam' => 'required',
            'omschrijving' => 'required'
        ]);
    }

    /**
     * Index View Tools
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Index()
    {
        $tools = Tool::all();
        return view('tools.index', compact('tools'));
    }

    /**
     * Edit View Tool
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Edit($id)
    {
        $tool = Tool::findOrFail($id);
        // return our view and tool information
        return View('tools.edit', compact('tool'));
    }

    /**
     * Create View Tool
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Create()
    {
        return View('tools.create');
    }

    /**
     * Creates A Tool
     * @param Request $request
     * @return Redirect
     * @throws \Illuminate\Foundation\Validation\ValidationException
     */
    public function Store(Request $request)
    {
        $validator = $this->validator($request->all());

        // process the login
        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }
        $input = $request->all();
        $input['status_id'] = 1;
        Tool::create($input);
        // redirect
        Session::flash('message', 'Successfully created Tool!');
        return redirect(route('tool.index'));
    }

    /**
     * Show View Tool
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Show($id)
    {
        $tool = Tool::findOrFail($id);
        // show the view and pass the tool to it
        return View('tools.show', compact('tool'));
    }

    /**
     * Updates A Tool
     * @param Request $request
     * @param $id
     * @return mixed
     * @throws \Illuminate\Foundation\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $validator = $this->validator($request->all());

        // process the login
        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }
        $tool = Tool::find($id);
        $tool->update($request->all());
        // redirect
        Session::flash('message', 'Successfully updated Tool!');
        return redirect(route('tool.index'));

    }

    /**
     * Removes A Tool
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        // delete
        $tools = Tool::find($id);
        $tools->delete();
        // redirect
        Session::flash('message', 'Successfully deleted the tool!');
        return redirect(route('tool.index'));

    }

}
