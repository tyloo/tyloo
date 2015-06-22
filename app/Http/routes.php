<?php

Route::group(['namespace' => 'Frontend'], function () {
    # Home
    Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

    # Resume
    Route::get('resume', ['as' => 'resume', 'uses' => 'PagesController@resume']);

    # Contact
    Route::get('contact', ['as' => 'contact', 'uses' => 'PagesController@getContact']);
    Route::post('contact', ['as' => 'contact', 'uses' => 'PagesController@postContact']);

    # Search
    Route::get('search', ['as' => 'search', 'uses' => 'PagesController@search']);

    # Blog
    Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogController@index']);
    Route::get('blog/{slug}', ['as' => 'blog.show', 'uses' => 'BlogController@show']);

    # Works
    Route::get('works', ['as' => 'works.index', 'uses' => 'WorksController@index']);
    Route::get('works/{slug}', ['as' => 'works.show', 'uses' => 'WorksController@show']);

    # Authentication
    Route::get('auth/login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@getLogin']);
    Route::post('auth/login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@postLogin']);
    Route::get('auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);

    # Registration
    Route::get('auth/register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@getRegister']);
    Route::post('auth/register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@postRegister']);
});

Route::group(['namespace' => 'Backend', 'middleware' => 'auth', 'prefix' => 'admin'], function () {
    # Dashboard
    Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'DashboardController@index']);
});