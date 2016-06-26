<?php

namespace App\Http\Controllers;

use App\Tool;
use App\User;
use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    private function validator($input)
    {
        return Validator::make($input, [
            'name' => 'required',
            'email' => 'required',
            'role_id' => 'required',
        ]);
    }

    /**
     * Index View Tools
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Index()
    {
        $user = User::all();
        return view('users.index', compact('user'));
    }

    /**
     * Edit View Tool
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Edit($id)
    {
        $user = User::findOrFail($id);
        // return our view and tool information
        return View('users.edit', compact('user'));
    }

    /**
     * Create View Tool
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Create()
    {
        return View('users.create');
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
        User::create($input);
        // redirect
        Session::flash('message', 'Successfully created User!');
        return redirect(route('users.index'));
    }

    /**
     * Show View Tool
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Show($id)
    {
        $user = User::findOrFail($id);
        // show the view and pass the tool to it
        return View('users.show', compact('user'));
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
        $user = User::find($id);
        $user->update($request->all());
        // redirect
        Session::flash('message', 'Successfully updated User!');
        return redirect(route('user.index'));

    }

    /**
     * Removes A Tool
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        // delete
        $user = User::find($id);
        $user->delete();
        // redirect
        Session::flash('message', 'Successfully deleted the user!');
        return redirect(route('users.index'));

    }

}
