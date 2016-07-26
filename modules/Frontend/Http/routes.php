<?php

Route::group(['middleware' => 'web', 'prefix' => 'frontend', 'namespace' => 'Modules\Frontend\Http\Controllers'], function () {
    Route::get('/', 'FrontendController@index');
});
