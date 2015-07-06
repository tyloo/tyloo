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
    Route::get('blog/tag/{slug}', ['as' => 'blog.tag', 'uses' => 'BlogController@tag']);

    # Works
    Route::get('works', ['as' => 'works.index', 'uses' => 'WorkController@index']);
    Route::get('works/{slug}', ['as' => 'works.show', 'uses' => 'WorkController@show']);

    # Authentication
    Route::get('auth/login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@getLogin']);
    Route::post('auth/login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@postLogin']);
    Route::get('auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);

    # Registration
    Route::get('auth/register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@getRegister']);
    Route::post('auth/register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@postRegister']);

    # Profile
    Route::get('auth/profile', ['as' => 'auth.profile', 'uses' => 'Auth\ProfileController@index', 'middleware' => 'auth']);

    # Password Reset Request
    Route::get('auth/remind', ['as' => 'auth.remind', 'uses' => 'Auth\PasswordController@getEmail']);
    Route::post('auth/remind', ['as' => 'auth.remind', 'uses' => 'Auth\PasswordController@postEmail']);

    # Password Reset
    Route::get('auth/reset/{token}', ['as' => 'auth.reset', 'uses' => 'Auth\PasswordController@getReset']);
    Route::post('auth/reset', ['as' => 'auth.reset', 'uses' => 'Auth\PasswordController@postReset']);
});

Route::group(['namespace' => 'Backend', 'middleware' => 'auth', 'prefix' => 'admin'], function () {
    # Dashboard
    Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'DashboardController@index']);

    # Settings
    Route::get('settings', ['as' => 'admin.settings.edit', 'uses' => 'SettingsController@edit']);
    Route::put('settings', ['as' => 'admin.settings.update', 'uses' => 'SettingsController@update']);

    # Blog
    Route::resource('blog', 'BlogController');
    Route::get('blog/delete/{id}', ['as' => 'admin.blog.destroy', 'uses' => 'BlogController@destroy']);

    # Works
    Route::resource('works', 'WorksController');
    Route::get('works/delete/{id}', ['as' => 'admin.works.destroy', 'uses' => 'WorksController@destroy']);

    # Users
    Route::resource('users', 'UsersController');
    Route::get('users/delete/{id}', ['as' => 'admin.users.destroy', 'uses' => 'UsersController@destroy']);

    # Tags
    Route::resource('tags', 'TagsController');
    Route::get('tags/delete/{id}', ['as' => 'admin.tags.destroy', 'uses' => 'TagsController@destroy']);
});
