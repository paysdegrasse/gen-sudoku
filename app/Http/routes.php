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

Route::group(['middleware' => ['web']], function() {

    Route::get('/', [
        'uses' => 'HomeController@index',
        'as'   => 'home'
    ]);
    Route::get('language/{lang}', 'HomeController@language')->where('lang', '[A-Za-z_-]+');
    
     // Admin
    Route::get('admin', [
        'uses' => 'AdminController@admin',
        'as' => 'admin',
        'middleware' => 'admin'
    ]);
    
    /*Route::get('medias', [
        'uses' => 'AdminController@filemanager',
        'as' => 'medias',
        'middleware' => 'redac'
    ]);*/
    
    // User
    /*Route::get('user/sort/{role}', 'UserController@indexSort');
 
    Route::get('user/roles', 'UserController@getRoles');
    Route::post('user/roles', 'UserController@postRoles');
 
    Route::put('userseen/{user}', 'UserController@validationAdmin');
 
    Route::resource('user', 'UserController');
 
    // Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');
    Route::get('auth/confirm/{token}', 'Auth\AuthController@getConfirm');
 
    // Resend routes...
    Route::get('auth/resend', 'Auth\AuthController@getResend');
 
    // Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
 
    // Password reset link request routes...
    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('password/email', 'Auth\PasswordController@postEmail');
 
    // Password reset routes...
    Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('password/reset', 'Auth\PasswordController@postReset');
    */
    
 
});

