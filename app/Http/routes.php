<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'investor_login']);
    Route::post('login', 'Auth\AuthController@postLogin');

    Route::group(['middleware' => 'auth'], function () {
    	Route::get('/', function () {
    		return redirect('statement-of-account');
    	});
		Route::get('statement-of-account', ['uses' => 'InvestorController@showSOA', 'as' => 'investor_soa']);
    });
});
