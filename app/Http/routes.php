<?php

Route::group(['middleware' => ['web']], function () {
    Route::group(['namespace' => 'Frontend'], function () {
        // Home
        Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

        // Resume
        Route::get('resume', ['as' => 'resume', 'uses' => 'PagesController@resume']);

        // Contact
        Route::get('contact', ['as' => 'contact', 'uses' => 'PagesController@getContact']);
        Route::post('contact', ['as' => 'contact', 'uses' => 'PagesController@postContact']);

        // Blog
        Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogController@index']);
        Route::get('blog/{slug}', ['as' => 'blog.show', 'uses' => 'BlogController@show']);
        Route::get('blog/tag/{slug}', ['as' => 'blog.tag', 'uses' => 'BlogController@tag']);

        // Works
        Route::get('works', ['as' => 'works.index', 'uses' => 'WorkController@index']);
        Route::get('works/{slug}', ['as' => 'works.show', 'uses' => 'WorkController@show']);
    });

    Route::group(['namespace'      => 'Backend', 'prefix' => 'admin'], function () {
        Route::group(['middleware' => 'auth'], function () {
            // Dashboard
            Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'DashboardController@index']);

            // Settings
            Route::get('settings', ['as' => 'admin.settings.edit', 'uses' => 'SettingsController@edit']);
            Route::put('settings', ['as' => 'admin.settings.update', 'uses' => 'SettingsController@update']);

            // Posts
            Route::resource('posts', 'PostsController');
            Route::get('posts/delete/{id}', ['as' => 'admin.posts.destroy', 'uses' => 'PostsController@destroy']);

            // Users
            Route::resource('users', 'UsersController');
            Route::get('users/delete/{id}', ['as' => 'admin.users.destroy', 'uses' => 'UsersController@destroy']);

            // Tags
            Route::resource('tags', 'TagsController');
            Route::get('tags/delete/{id}', ['as' => 'admin.tags.destroy', 'uses' => 'TagsController@destroy']);

            // Profile
            Route::get('profile', ['as' => 'admin.auth.profile', 'uses' => 'Auth\ProfileController@index']);
        });

        // Authentication
        Route::get('auth/login', ['as' => 'admin.auth.login', 'middleware' => 'guest', 'uses' => 'Auth\AuthController@getLogin']);
        Route::post('auth/login', ['as' => 'admin.auth.login', 'middleware' => 'guest', 'uses' => 'Auth\AuthController@postLogin']);
        Route::get('auth/logout', ['as' => 'admin.auth.logout', 'middleware' => 'auth', 'uses' => 'Auth\AuthController@getLogout']);

        // Password Reset Request
        Route::get('auth/remind', ['as' => 'admin.auth.remind', 'middleware' => 'guest', 'uses' => 'Auth\PasswordController@getEmail']);
        Route::post('auth/remind', ['as' => 'admin.auth.remind', 'middleware' => 'guest', 'uses' => 'Auth\PasswordController@postEmail']);

        // Password Reset
        Route::get('auth/reset/{token}', ['as' => 'admin.auth.reset', 'middleware' => 'guest', 'uses' => 'Auth\PasswordController@getReset']);
        Route::post('auth/reset', ['as' => 'admin.auth.reset', 'middleware' => 'guest', 'uses' => 'Auth\PasswordController@postReset']);
    });
});
