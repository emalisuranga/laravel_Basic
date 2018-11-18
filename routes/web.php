<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('signUp', function () {
    return view('user');
});

Route::get('home', [
    'uses'=>'UserController@getHome',
    'as'=>'home'
    ]);

Route::get('singOut', [
        'uses'=>'UserController@logOut',
        'as'=>'singOut'
        ]);
    

Route::post('register', [
    'uses'=>'UserController@RegisterUser',
    'as'=>'singUp'
    ]);

Route::post('login', [
        'uses'=>'UserController@LoginUser',
        'as'=>'singIn'
        ]);