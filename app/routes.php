<?php

/*
 *
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
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showHome']);

// alias for creating a new user
Route::get('signup', 'UsersController@create');

// aliases for session creation and destruction
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

// resources
Route::resource('sessions', 'SessionsController', ['only' => ['create','store','destroy']]);
Route::resource('users', 'UsersController');
Route::resource('taxonomies', 'TaxonomiesController');

