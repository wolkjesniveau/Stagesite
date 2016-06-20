<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Validator;
use App\Http\Requests;

class CompaniesController extends Controller
{
    private function validator($input)
    {
        return Validator::make($input, [
            'naam' => 'required|min:2|max:30',
            'address' => 'required',
            'postcode' => 'required|max:10|min:6',
            'plaats' => 'required',
            'telnr' => 'required|numeric'
        ]);
    }

    /**
     * Index View Companies
     * @return mixed
     */
    public function index()
    {
        // Haal alle bedrijven op
        $companies = Company::all();
        // View inladen met de bedrijven
        return View::make('companies.index', compact('companies'));
    }

    /**
     * Create View Companies
     * @return View
     */
    public function create()
    {
        return view('companies.create');
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
        Company::create($request->all());
        Session::flash('message', 'Success');
        return redirect('companies');

    }

    /**
     * Return Show View
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);
        // show the view and pass the nerd to it
        return View::make('companies.show', compact('company'));
    }

    /**
     * Edit View Company
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view::make('companies.edit', compact('company'));
    }

    /**
     * Remove A Company
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        // delete
        $company = Company::find($id);
        $company->delete();
        // redirect
        Session::flash('message', 'Verwijdert!');
        return redirect('companies');
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
        $company = Company::findOrFail($id);
        $company->update($request->all());
        // redirect
        Session::flash('message', 'Success');
        return redirect('companies');
    }
}