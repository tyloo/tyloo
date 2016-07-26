<?php

Route::group(['middleware' => 'web', 'prefix' => 'resume', 'namespace' => 'Modules\Resume\Http\Controllers'], function () {
    Route::get('/', 'ResumeController@index');
});
