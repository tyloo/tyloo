<?php

Route::group(['middleware' => 'web', 'prefix' => 'portfolio', 'namespace' => 'Modules\Portfolio\Http\Controllers'], function () {
    Route::get('/', 'PortfolioController@index');
});
