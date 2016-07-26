<?php

Route::group(['middleware' => 'web', 'prefix' => 'contact', 'namespace' => 'Modules\Contact\Http\Controllers'], function () {
    Route::get('/', 'ContactController@index');
});
