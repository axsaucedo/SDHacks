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

Route::group(['domain' => 'my.' . config('app.domain')], function() {
    // Protected area
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/', function() {
            return view('dashboard');
        });

        Route::group(['prefix' => 'team'], function() {
            Route::get('/', 'TeamsController@show');
            Route::get('/create', 'TeamsController@create');
            Route::post('/create', 'TeamsController@store');
            Route::post('/join', 'TeamsController@join');
            Route::get('/leave', 'TeamsController@leave');
            Route::get('/apply', 'TeamsController@apply');
            Route::post('/apply', 'TeamsController@submitApplication');
        });

        Route::group(['prefix' => 'apply'], function() {
            Route::get('/', 'ApplicationsController@create');
            Route::post('/', 'ApplicationsController@store');
        });
    });

    Route::group(['prefix' => 'auth'], function() {
        Route::get('settings', 'Auth\AuthController@edit');
        Route::post('settings', 'Auth\AuthController@update');
        Route::group(['prefix' => 'github'], function() {
            Route::get('/', 'Auth\AuthController@redirectToGitHub');
            Route::get('callback', 'Auth\AuthController@handleGitHubCallback');
        });
    });

    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);
});

Route::get('/', function(){
    return view('welcome');
});