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
Route::get('login',	'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout',	'Auth\AuthController@getLogout');
Route::get('register',	'Auth\AuthController@getRegister');
Route::post('register',	'Auth\AuthController@postRegister');
Route::get('password/email',	'Auth\PasswordController@getEmail');
Route::post('password/email',	'Auth\PasswordController@postEmail');
Route::get('password/email/{token}',	'Auth\PasswordController@getReset');
Route::post('password/reset',	'Auth\PasswordController@postReset');


Route::get('/', function () {
    return view('welcome');
});
