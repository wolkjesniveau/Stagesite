<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'PagesController@welcome')->name('welcome');
Route::get('companies', 'PagesController@companies')->name('companies');
Route::get('company', 'PagesController@company')->name('company');
Route::get('master', 'PagesController@master')->name('master');
Route::get('register', 'PagesController@register')->name('register');
// ROLE CHECK MUST BE ADDED HERE WHEN DATABASE IS CORRECT
Route::get('admin', 'PagesController@admin')->name('admin');
Route::get('admin/internshipAdmin', 'PagesController@internshipAdmin')->name('internshipAdmin');
Route::get('admin/studiesAdmin', 'PagesController@studiesAdmin')->name('studiesAdmin');
Route::get('admin/schoolsAdmin', 'PagesController@schoolsAdmin')->name('schoolsAdmin');
Route::get('admin/companiesAdmin', 'PagesController@companiesAdmin')->name('companiesAdmin');
Route::get('admin', 'AdminController@admin')->name('admin');
Route::get('internshipAdmin', 'AdminController@internshipAdmin')->name('internshipAdmin');
Route::get('studiesAdmin', 'AdminController@studiesAdmin')->name('studiesAdmin');
Route::get('schoolsAdmin', 'AdminController@schoolsAdmin')->name('schoolsAdmin');
Route::get('companiesAdmin', 'AdminController@companiesAdmin')->name('companiesAdmin');
Route::get('toolsAdmin', 'AdminController@toolsAdmin')->name('toolsAdmin');
Route::get('tools-edit', 'AdminController@tools-edit')->name('tools-edit');


Route::get('tool/edit/{id}', array('as' => 'tool.edit', function($id)
{
    // return our view and tool information
    return View::make('admin.toolUpdate') // pulls app/views/toolUpdate.blade.php
    ->with('tool', \App\Tool::find($id));
}));
Route::post('tool/edit', function() {
    // process our form
});

// Model Routes...
Route::get('internships', 'InternshipsController@index');
Route::get('studies', 'StudiesController@index');



// Login Routers...
$this->get('login', 'Auth\AuthController@showLoginForm')->name('login');
$this->post('login', 'Auth\AuthController@login')->name('auth.login');
$this->get('logout', 'Auth\AuthController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\AuthController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\AuthController@register')->name('auth.register');

// Password Reset Routes...
$this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
$this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
$this->post('password/reset', 'Auth\PasswordController@reset');