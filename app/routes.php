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

// Route::get('/', function()
// {
	// return View::make('hello');
// });

Route::group(array("before"=>"auth"),function(){
	
});

Route::get('/', function()
{
	return View::make('index.index');
});

Route::get('vs/{name}', array('uses'=>'VsController@form'));

Route::post('vs/submit/{name}', array('uses'=>'VsController@submit'));

Route::get('dashboard/{name}', array('uses'=>'VsController@dashboard'));

Route::get('signin', array('uses'=>'UserController@signin'));

Route::get('signup', array('uses'=>'UserController@signup'));

Route::post('signin', array('uses'=>'UserController@signin_submit'));

Route::post('signup', array('uses'=>'UserController@signup_submit'));

Route::get('signout', array('uses'=>'UserController@signout'));
Route::get('logout', array('uses'=>'UserController@signout'));

Route::get('welcome', array('uses'=>'UserController@welcome'));

Route::post('welcome', array('uses'=>'UserController@welcome_submit'));
Route::post('submit_venue', array('uses'=>'UserController@venue_submit'));