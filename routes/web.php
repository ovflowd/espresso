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

Route::group(['middleware' => 'guest'], function() {
    Route::get('/', 'AuthController@login');
    Route::post('/', 'AuthController@authenticate');
});

Route::group(['middleware' => 'user'], function() {
    Route::get('/logout', 'AuthController@destroy');
    Route::get('/dashboard', 'PagesController@dashboard');
});