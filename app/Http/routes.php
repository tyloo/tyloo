<?php

// Home
Route::get('/', ['as' => 'pages.home', 'uses' => 'PagesController@home']);

// Resume
Route::get('resume', ['as' => 'pages.resume', 'uses' => 'PagesController@resume']);

// Projects
Route::get('projects', ['as' => 'pages.projects', 'uses' => 'PagesController@projects']);

// Blog
Route::get('blog', ['as' => 'pages.blog', 'uses' => 'PagesController@blog']);

// Contact
Route::get('contact', ['as' => 'pages.contact', 'uses' => 'PagesController@contact']);
