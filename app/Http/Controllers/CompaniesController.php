<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Validator;

use App\Http\Requests;

class CompaniesController extends Controller
{
    public function index()
    {
        // Haal alle bedrijven op
        $companies = Company::all();

        // View inladen met de bedrijven
        return View::make('companies.index')
            ->with('companies', $companies);
    }

    public function create()
    {

        return view('companies.create');
    }

    public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'naam' => 'required|min:2|max:30',
            'address' => 'required',
            'postcode' => 'required|max:6|min:6',
            'plaats' => 'required',
            'telnr' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('companies.create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $company = new Company;
            $company->naam = Input::get('naam');
            $company->address = Input::get('address');
            $company->postcode = Input::get('postcode');
            $company->plaats = Input::get('plaats');
            $company->telnr = Input::get('telnr');
            $company->save();

            // redirect
            Session::flash('message', 'Success');
            return Redirect::to('companies');
        }

    }

    public function show($id)
    {
        $company = Company::find($id);

        // show the view and pass the nerd to it
        return View::make('companies.show')
            ->with('company', $company);
    }

    public function edit($id)
    {
        $company = Company::find($id);

        return view::make('companies.edit')
            ->with('company', $company);
    }

    public function destroy($id)
    {
        // delete
        $company = Company::find($id);
        $company->delete();

        // redirect
        Session::flash('message', 'Verwijdert!');
        return Redirect::to('companies');
    }

    public function update($id)
    {
        $rules = array(
            'naam' => 'required|min:2|max:30',
            'address' => 'required',
            'postcode' => 'required|max:6|min:6',
            'plaats' => 'required',
            'telnr' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('nerds/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }
        if ($validator->fails()) {
            return Redirect::to('companies.create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $company = new Company;
            $company->naam = Input::get('naam');
            $company->address = Input::get('address');
            $company->postcode = Input::get('postcode');
            $company->plaats = Input::get('plaats');
            $company->telnr = Input::get('telnr');
            $company->save();

            // redirect
            Session::flash('message', 'Success');
            return Redirect::to('companies');
        }
    }
}