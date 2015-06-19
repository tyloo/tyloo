<?php

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
    Route::get('resume', ['as' => 'resume', 'uses' => 'PagesController@resume']);

    # Contact
    Route::get('contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);

    # Search
    Route::get('search', ['as' => 'search', 'uses' => 'PagesController@search']);

    # Blog
    Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogController@index']);
    Route::get('blog/{slug}', ['as' => 'blog.show', 'uses' => 'BlogController@show']);

    # Works
    Route::get('works', ['as' => 'works.index', 'uses' => 'WorksController@index']);
    Route::get('works/{slug}', ['as' => 'works.show', 'uses' => 'WorksController@show']);
});
