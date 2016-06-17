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

Route::get('admin', 'AdminController@admin')->name('admin');


// Company Routes
Route::resource('companies', 'CompaniesController', ['except' => ['show']]);
Route::get('company', 'PagesController@company')->name('company');

//Studies Routes
Route::resource('study', 'StudiesController');

//Tools Routes
Route::resource('tool', 'ToolsController');

//Internship Routes
Route::get('internships', 'InternshipsController@index');


//// ROLE CHECK MUST BE ADDED HERE WHEN DATABASE IS CORRECT
Route::get('admin/internshipAdmin', 'PagesController@internshipAdmin')->name('internshipAdmin');
Route::get('admin/schoolsAdmin', 'PagesController@schoolsAdmin')->name('schoolsAdmin');
Route::get('admin/companiesAdmin', 'PagesController@companiesAdmin')->name('companiesAdmin');
Route::get('internshipAdmin', 'AdminController@internshipAdmin')->name('internshipAdmin');
Route::get('schoolsAdmin', 'AdminController@schoolsAdmin')->name('schoolsAdmin');
Route::get('companiesAdmin', 'AdminController@companiesAdmin')->name('companiesAdmin');


//// Login Routers...
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