<?php

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('resume', ['as' => 'resume', 'uses' => 'PagesController@resume']);
Route::get('works', ['as' => 'works', 'uses' => 'PagesController@works']);
Route::get('blog', ['as' => 'blog', 'uses' => 'PagesController@blog']);
Route::get('contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);
Route::get('search', ['as' => 'search', 'uses' => 'PagesController@search']);