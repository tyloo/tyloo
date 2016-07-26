<?php

Route::group(['middleware' => 'web', 'prefix' => 'backend', 'namespace' => 'Modules\Backend\Http\Controllers'], function()
{
	Route::get('/', 'BackendController@index');
});