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

Route::get('/', 'Frontend\HomeController@getIndex');

Route::get('register', array('as' => 'register', 'uses' => 'AuthController@getRegister'));
Route::get('login', array('as' => 'login', 'uses' => 'AuthController@getLogin'));
Route::post('register', 'AuthController@postRegister');

// login with open id
Route::group(array('prefix' => 'oauth'), function () {
    Route::get('session/facebook', array('as' => 'sigin-facebook', 'uses' => 'OAuthController@getLoginWithFacebook'));
});