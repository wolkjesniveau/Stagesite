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
Route::get('login', 'PagesController@login')->name('login');
Route::get('register', 'PagesController@register')->name('register');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);