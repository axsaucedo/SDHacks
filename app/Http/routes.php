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

    // Protected area
    Route::group(['middleware' => 'auth'], function() {
        Route::group(['prefix' => 'team'], function() {
            Route::get('/', 'TeamsController@show');
            Route::get('/create', 'TeamsController@create');
            Route::post('/create', 'TeamsController@store');
            Route::get('/leave', 'TeamsController@leave');
            Route::get('/apply', 'TeamsController@apply');
            Route::post('/apply', 'TeamsController@submitApplication');
        });

        Route::group(['prefix' => 'apply'], function() {
            Route::get('/', 'ApplicationsController@create');
            Route::post('/', 'ApplicationsController@store');
        });
    });
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);