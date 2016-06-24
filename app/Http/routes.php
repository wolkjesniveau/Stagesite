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


// Admin Company Routes
Route::resource('companies', 'CompaniesController', ['except' => ['show']]);
Route::get('admin/companies/edit/{id}', 'CompaniesController@edit');
Route::get('admin/companies/create', 'CompaniesController@create');
Route::get('admin/companies/show/{id}', 'CompaniesController@show');
Route::delete('admin/companies/{id}', 'CompaniesController@destroy');

// Internship Routes
Route::resource('internships', 'InternshipsController', ['except' => ['show']]);
Route::get('admin/internships/edit/{id}', 'InternshipsController@edit');
Route::get('admin/internships/create', 'InternshipsController@create');
Route::get('admin/internships/show/{id}', 'InternshipsController@show');
Route::delete('admin/internships/{id}', 'InternshipsController@destroy');

//Studies Routes
Route::resource('study', 'StudiesController');

//Tools Routes

Route::resource('tool', 'ToolsController');

//Internship Routes
Route::get('internships', 'InternshipsController@index');

//School Routes
Route::resource('schools', 'SchoolController', ['except' => ['show']]);
Route::get('school', 'PagesController@school')->name('school');
Route::get('schools/edit/{id}', 'SchoolController@edit');
Route::get('schools/create', 'SchoolController@create');
Route::get('schools/show/{id}', 'SchoolController@show');




//// ROLE CHECK MUST BE ADDED HERE WHEN DATABASE IS CORRECT
Route::get('admin/internshipAdmin', 'PagesController@internshipAdmin')->name('internshipAdmin');
Route::get('admin/schoolsAdmin', 'PagesController@schoolsAdmin')->name('schoolsAdmin');
Route::get('internshipAdmin', 'AdminController@internshipAdmin')->name('internshipAdmin');
Route::get('schoolsAdmin', 'AdminController@schoolsAdmin')->name('schoolsAdmin');
Route::get('toolsAdmin', 'AdminController@toolsAdmin')->name('toolsAdmin');
Route::get('usersAdmin', 'AdminController@usersAdmin')->name('usersAdmin');


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