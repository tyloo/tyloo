<?php

// Home
Route::get('/', ['as' => 'pages.home', 'uses' => 'PagesController@home']);

// Resume
Route::get('resume', ['as' => 'pages.resume', 'uses' => 'PagesController@resume']);

// Projects
Route::group(['prefix' => 'projects'], function() {
    Route::get('/', ['as' => 'pages.projects.index', 'uses' => 'ProjectsController@index']);
    Route::get('{slug}', ['as' => 'pages.projects.show', 'uses' => 'ProjectsController@show']);
});

// Blog
Route::group(['prefix' => 'blog'], function() {
    Route::get('/', ['as' => 'pages.blog.index', 'uses' => 'BlogController@index']);
    Route::get('{slug}', ['as' => 'pages.blog.show', 'uses' => 'BlogController@show']);
    Route::get('tags/{slug}', ['as' => 'pages.blog.tag', 'uses' => 'BlogController@tag']);
});

// Contact
Route::get('contact', ['as' => 'pages.contact', 'uses' => 'PagesController@contact']);
Route::post('contact', ['as' => 'pages.postContact', 'uses' => 'PagesController@postContact']);
