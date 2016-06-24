<?php

namespace App\Http\Controllers;

use App\Study;
use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;
use Redirect;
use Session;
use Illuminate\View\View;
use Input;

class StudiesController extends Controller
{
    private function validator($input)
    {
        return Validator::make($input, [
            'name_study' => 'required',
        ]);
    }

    /**
     * Index View Study
     * @return View
     */
    public function Index()
    {
        $studies = Study::all();
        return view('studies.index', compact('studies'));
    }

    /**
     * Edit View Study
     * @param $id
     * @return View
     */
    public function Edit($id)
    {
        $study = Study::findOrFail($id);
        return View('studies.edit', compact('study'));
    }

    /**
     * Create View Study
     * @return View
     */
    public function Create()
    {
        return View('studies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function Store(Request $request)
    {
        // validate
        $validator = $this->validator($request->all());
        // process the login
        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
            // store
        }
        Study::create($request->all());
        // redirect
        Session::flash('message', 'Successfully created Study!');
        return redirect(route('study.index'));
    }

    /**
     * Show View Study
     * @param $id
     * @return $this
     */
    public function Show($id)
    {
        // get the Study
        $study = Study::find($id);
        // show the view and pass the study to it
        return View('studies.show', compact('study'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->validator($request->all());

        // process the login
        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
            // store
        }
        // store
        $study = Study::findOrFail($id);
        $study->update($request->all());
        // redirect
        Session::flash('message', 'Successfully updated Study!');
        return redirect(route('study.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        // delete
        $study = Study::find($id);
        $study->delete();
        // redirect
        Session::flash('message', 'Successfully deleted the Study!');
        return redirect(route('study.index'));
    }

}
