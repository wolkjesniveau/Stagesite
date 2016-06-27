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

Route::get('admin', ['middleware' => 'docent', 'uses' => 'AdminController@admin'])->name('admin');


// Admin Company Routes
Route::resource('companies', 'CompaniesController', ['except' => ['show']]);
Route::get('admin/companies/edit/{id}',['middleware' => 'admin', 'uses' => 'CompaniesController@edit']);
Route::get('admin/companies/create', ['middleware' => 'admin', 'uses' => 'CompaniesController@create']);
Route::get('admin/companies/show/{id}','CompaniesController@show');
Route::delete('admin/companies/{id}', ['middleware' => 'admin', 'uses' => 'CompaniesController@destroy']);

// Internship Routes
Route::resource('internships', 'InternshipsController', ['except' => ['show']]);
Route::get('admin/internships/edit/{id}', ['middleware' => 'docent','uses' => 'InternshipsController@edit']);
Route::get('admin/internships/create', ['middleware' => 'docent','uses' => 'InternshipsController@create']);
Route::get('admin/internships/show/{id}', 'InternshipsController@show');
Route::delete('admin/internships/{id}', ['middleware' => 'docent','uses' => 'InternshipsController@destroy']);

//Studies Routes
Route::resource('study', 'StudiesController');

//Tools Routes

Route::resource('tool', 'ToolsController');

//Internship Routes
Route::get('internships', 'InternshipsController@index');

//School Routes
Route::resource('schools', 'SchoolController', ['except' => ['show']]);
Route::get('school', 'PagesController@school')->name('school');
Route::get('schools/edit/{id}', ['middleware' => 'docent','uses' => 'SchoolController@edit']);
Route::get('schools/create', ['middleware' => 'docent','uses' => 'SchoolController@create']);
Route::get('schools/show/{id}', 'SchoolController@show');

//Users Routes

Route::resource('user', 'UsersController');

Route::resource('queries', 'QueryController');


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