<?php
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('backend.show_login_form');
    Route::post('login', 'Auth\AdminLoginController@login')->name('backend.login');
    Route::middleware('auth:admin')->group(function () {
        Route::post('logout', 'Auth\AdminLoginController@logout')->name('backend.logout');
        Route::get('/', 'BackendController@index')->name('backend.dashboard');
    });
