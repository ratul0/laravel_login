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

Route::get('/', ['as'=>'index','uses' => 'PublicController@home']);

Route::controller('password', 'RemindersController');

Route::group(['before' => 'guest'], function (){
	Route::get('login', ['as'=>'login','uses' => 'PublicController@login']);
	Route::post('login', array('uses' => 'PublicController@doLogin'));
});

Route::group(array('before' => 'auth'), function(){
	Route::get('logout', ['as' => 'logout', 'uses' => 'PublicController@logout']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'DashboardController@index'));
});
