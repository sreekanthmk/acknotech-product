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

//Route::post('auth/register', 'TestController@index');
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/home', function () {
//    return 'hi';
//});

Route::get('/home', 'HomeController@index');

Route::get('home/profile', 'HomeController@edit');

Route::get('/set_role', 'RegroleController@store');

Route::get('/test', 'TestController@create');
Route::post('/test', 'TestController@store');






Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
