<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Admin routes

Route::group(['prefix' => 'admin'], function () {

    // Training management
    Route::group(['prefix' => 'training'], function () {

        Route::get('/', 'TrainingController@index');
        Route::get('create', 'TrainingController@create');
        Route::get('{code}/start', 'TrainingController@start');
        Route::get('{code}/end', 'TrainingController@end');
        Route::get('{code}', 'TrainingController@show');
        Route::post('/', 'TrainingController@store');

    });

    // Books management

    Route::group(['prefix' => 'book'], function () {

        Route::get('/', 'BookController@index');
        Route::get('create', 'BookController@create');
        Route::get('{id}/edit', 'BookController@edit');
        Route::get('{id}', 'BookController@show');

        Route::post('/', 'BookController@store');
        Route::post('search', 'BookController@search');
        Route::patch('{id}', 'BookController@update');

    });

    // Library user

    Route::group(['prefix' => 'lib-user'], function () {

        Route::get('/', 'LibUserController@index');
        Route::get('create', 'LibUserController@create');
        Route::post('/', 'LibUserController@store');
        Route::delete('/{id}', 'LibUserController@delete');

    });


});


// Public Routes

Route::group(['prefix' => 'training'], function () {

    Route::get('/', 'TrainingController@publicIndex');
    Route::get('{code}/register', 'TraineeController@showRegistrationForm');
    Route::post('/register', 'TraineeController@register');

});

