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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/success', function() {
    return view('auth.confirm');
});

Route::group(['domain' => 'my.' . config('app.domain')], function() {
    Route::group(['prefix' => 'apply', 'middleware' => 'auth'], function() {
        Route::get('/', 'ApplicationsController@create');
        Route::post('/', 'ApplicationsController@store');
    });
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);