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
    return "Hi";
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

    // Issue Receive Books
    Route::group(['prefix' => 'library'], function () {
        Route::get('issue-retrieve', 'LibraryController@showIssueRetrieveForm');
        Route::post('issue', 'LibraryController@issue');
        Route::patch('retrieve', 'LibraryController@retrieve');
    });

});

// Public Routes
Route::group(['prefix' => 'training'], function () {
    Route::get('/', 'TrainingController@publicIndex');
    Route::get('{code}/register', 'TraineeController@showRegistrationForm');
    Route::post('register', 'TraineeController@register');
});

//Ajax routes
Route::group(['prefix' => 'ajax'], function () {
    Route::get('book-details/{id}', 'AjaxController@getBookDetails');
    Route::get('check-book-status/{id}', 'AjaxController@checkBookStatus');
    Route::get('lib-user-details/{lib_user_id?}', 'AjaxController@getLibUserDetails');
    Route::get('search-books', 'AjaxController@searchBooks');
});
