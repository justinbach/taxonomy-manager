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

Route::get('/', function()
{
	return View::make('welcome');
});

// login form
Route::get('login', ['uses' => 'UserController@showLogin']);

// process logic
Route::post('login', ['uses' => 'UserController@doLogin']);
