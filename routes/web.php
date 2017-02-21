<?php

/*
|--------------------------------------------------------------------------
| Espreso Web Routes
|--------------------------------------------------------------------------
|
|
|
*/

Route::group(['middleware' => 'guest'], function() {
    Route::get('/', 'AuthController@login');
    Route::post('/', 'AuthController@authenticate');
});

Route::group(['middleware' => ['user', 'nav_log', 'perm_check']], function() {
    Route::get('/logout', 'AuthController@destroy');

    /* Main tabs landing routes */
    Route::get('/dashboard', 'PagesController@dashboard');

    /* System tab routes */
    Route::get('/system/logs', 'PagesController@system_logs');
    Route::get('/system/users', 'PagesController@system_users');
    Route::get('/system/roles', 'PagesController@system_roles');

    Route::get('/system/users/add', 'SystemController@add_user_view');
    Route::post('/system/users/add', 'SystemController@add_user');

    Route::get('/system/roles/add', 'SystemController@add_role_view');
    Route::post('/system/roles/add', 'SystemController@add_role');

    /* Search URIs */
    Route::get('/internal/search/users/{query}', 'SearchController@users');
    Route::get('/internal/search/rooms/{query}', 'SearchController@rooms');
    Route::get('/internal/search/furnis/{query}', 'SearchController@furnis');

});