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
       Route::get('/', function() {
            return view('welcome');
       })->name('home');

       Route::post('/signup', [
        'uses' => 'UserController@postSignUp',
        'as' => 'signup'
       ]);

       Route::post('/signin', [
               'uses' => 'UserController@postSignIn',
               'as' => 'signin'
       ]);

       Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'logout'
       ]);

       Route::get('/profilepage', [
            'uses' => 'UserController@getProfilePage',
            'as' => 'profilepage'
       ]);

       Route::get('/account', [
            'uses' => 'UserController@getAccount',
            'as' => 'account'
       ]);

       Route::post('/updateaccount', [
            'uses' => 'UserController@postSaveAccount',
            'as' => 'account.save'
       ]);

       Route::get('/userimage/{filename}', [
            'uses' => 'UserController@getUserImage',
            'as' => 'account.image'
       ]);

       Route::get('/dashboard', [
           'uses' => 'PostController@getDashboard',
           'as' => 'dashboard',
           'middleware' => 'auth'
       ]);

       Route::post('/createpost', [
            'uses' => 'PostController@postCreatePost',
            'as' => 'post.create',
            'middleware' => 'auth'
       ]);

       Route::get('/delete-post/{post_id}', [
            'uses' => 'PostController@getDeletePost',
            'as' => 'post.delete',
            'middleware' => 'auth'
       ]);

       Route::post('/edit', [
            'uses' => 'PostController@postEditPost',
            'as' => 'edit'
       ]);

       Route::post('/like', [
            'uses' => 'PostController@postLikePost',
            'as' => 'like'
       ]);
});