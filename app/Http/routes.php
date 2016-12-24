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

Route::get('/', function () {
    return view('welcome');
});

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
       Route::post('/signup', [
        'uses' => 'UserController@postSignUp',
        'as' => 'signup'
       ]);

       Route::post('/signin', [
               'uses' => 'UserController@postSignIn',
               'as' => 'signin'
              ]);

       Route::get('/dashboard', [
       'uses' => 'UserController@getDashboard',
       'as' => 'dashboard'
       ]);
});