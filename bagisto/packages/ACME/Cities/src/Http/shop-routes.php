<?php

Route::group([
        'prefix'     => 'cities',
        'middleware' => ['web', 'theme', 'locale', 'currency']
    ], function () {

        Route::get('/', 'ACME\Cities\Http\Controllers\Shop\CitiesController@index')->defaults('_config', [
            'view' => 'cities::shop.index',
        ])->name('shop.cities.index');

});