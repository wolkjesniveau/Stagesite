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
//Route::get('login', 'PagesController@login')->name('login');
Route::get('register', 'PagesController@register')->name('register');
// ROLE CHECK MUST BE ADDED WHERE WHEN DATABASE IS CORRECT
Route::get('admin', 'PagesController@admin')->name('admin');
Route::get('internshipAdmin', 'PagesController@internshipAdmin')->name('internshipAdmin');
Route::get('studiesAdmin', 'PagesController@studiesAdmin')->name('studiesAdmin');
Route::get('schoolsAdmin', 'PagesController@schoolsAdmin')->name('schoolsAdmin');
Route::get('companiesAdmin', 'PagesController@companiesAdmin')->name('companiesAdmin');


Route::get('internships', 'InternshipsController@index');
Route::get('studies', 'StudiesController@index');


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