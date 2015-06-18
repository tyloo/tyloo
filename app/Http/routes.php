<?php

# Event::listen('illuminate.query', function($query) { dump($query); });

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
    Route::get('resume', ['as' => 'resume', 'uses' => 'PagesController@resume']);
    Route::get('works', ['as' => 'works', 'uses' => 'PagesController@works']);
    Route::get('blog', ['as' => 'blog', 'uses' => 'PagesController@blog']);
    Route::get('contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);
    Route::get('search', ['as' => 'search', 'uses' => 'PagesController@search']);
    Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogController@index']);
    Route::get('blog/{slug}', ['as' => 'blog.show', 'uses' => 'BlogController@show']);
});
