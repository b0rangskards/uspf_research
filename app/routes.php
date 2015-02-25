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

/* Public Routes */

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('/contactus', [
    'as' => 'contactus',
    'uses' => 'PagesController@contactus'
]);

Route::get('/aboutus', [
    'as' => 'aboutus',
    'uses' => 'PagesController@aboutus'
]);

Route::get('/staff', [
    'as' => 'staff',
    'uses' => 'PagesController@staff'
]);

Route::get('/gallery', [
    'as' => 'gallery',
    'uses' => 'PagesController@gallery'
]);

Route::get('/compilation', [
    'as' => 'compilation',
    'uses' => 'PagesController@compilation'
]);


/* Admin Routes */

Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', [
        'as' => 'login',
        'uses' => 'SessionsController@create'
    ]);

    Route::post('/login', [
        'as' => 'login',
        'uses' => 'SessionsController@store'
    ]);

    Route::group(['before' => 'auth'], function(){

        Route::get('/logout', [
            'as' => 'logout',
            'uses' => 'SessionsController@destroy'
        ]);

        Route::get('/', [
            'as' => 'dashboard',
            'uses' => 'AdminsController@dashboard'
        ]);

        Route::resource('users', 'UsersController', [
            'except' => ['create', 'show', 'edit']
        ]);

    });


});