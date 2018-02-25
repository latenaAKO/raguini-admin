<?php

$namespace = 'Admin\Http\Controllers';

Route::group([
    'namespace'     =>      $namespace,
    'prefix'        =>      config('admin.prefix'),
    'middleware'    =>      'web'
], function() {
    Route::group([ 'middleware' => ['permission:access_admin', 'auth'] ], function() {
        Route::get('/', 'AdminDashboardController@index');
        Route::resource('roles', 'RoleController');
        Route::resource('permissions', 'PermissionController');

        Route::resource('posts', 'PostController');
    });
});