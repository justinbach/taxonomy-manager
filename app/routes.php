<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// landing page
Route::get('/', ['uses' => 'HomeController@showHome']);

// login logic
Route::get('login', ['uses' => 'UserController@showLogin']);
Route::post('login', ['uses' => 'UserController@doLogin']);
Route::get('logout', ['uses' => 'UserController@doLogout']);

