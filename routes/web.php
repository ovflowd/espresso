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

/* Authentication */
Route::get('/', 'AuthController@login');
Route::post('/', 'AuthController@authenticate');

Route::get('/dashboard', 'PagesController@dashboard');