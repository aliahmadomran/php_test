<?php

Route::group([
        'prefix'     => 'shipping_cost',
        'middleware' => ['web', 'theme', 'locale', 'currency']
    ], function () {

        Route::get('/', 'ACME\shipping_cost\Http\Controllers\Shop\shipping_costController@index')->defaults('_config', [
            'view' => 'shipping_cost::shop.index',
        ])->name('shop.shipping_cost.index');

});