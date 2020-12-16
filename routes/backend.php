<?php
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('show_login_form');
    Route::post('login', 'Auth\AdminLoginController@login')->name('login');
    
    Route::middleware('auth:admin')->group(function () {
        Route::post('logout', 'Auth\AdminLoginController@logout')->name('logout');
        Route::get('/', 'BackendController@index')->name('dashboard');
    });
