<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Internship;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Validator;
use App\Http\Requests;

class InternshipsController extends Controller
{
    private function validator($input)
    {
        return Validator::make($input, [
            'begin_DATE' => 'required',
            'eind_DATE' => 'required',
        ]);
    }

    /**
     * Index View Companies
     * @return mixed
     */
    public function index()
    {
        // Haal alle bedrijven op
        $internships = Internship::all();
        // View inladen met de bedrijven
        return View::make('internships.index', compact('internships'));
    }

    /**
     * Create View Companies
     * @return View
     */
    public function create()
    {
        return view('internships.create');
    }

    /**
     * Store The New Company
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Foundation\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }
        Internship::create($request->all());
        Session::flash('message', 'Success');
        return redirect('internships');

    }

    /**
     * Return Show View
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $internships = Internship::findOrFail($id);
        // show the view and pass the nerd to it
        return View::make('internships.show', compact('internships'));
    }

    /**
     * Edit View Internship
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $internships = Internship::findOrFail($id);
        return view::make('internships.edit', compact('internships'));
    }

    /**
     * Remove A Internship
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        // delete
        $internships = Internship::find($id);
        $internships->delete();
        // redirect
        Session::flash('message', 'Verwijdert!');
        return redirect('internships');
    }

    /**
     * Updates A Company
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Foundation\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {

        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }
        $internships = Internship::findOrFail($id);
        $internships->update($request->all());
        // redirect
        Session::flash('message', 'Success');
        return redirect('internships');
    }
}
