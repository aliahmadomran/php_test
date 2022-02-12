<?php

Route::group([
        'prefix'        => 'admin/shipping_cost',
        'middleware'    => ['web', 'admin']
    ], function () {

        Route::get('', 'ACME\shipping_cost\Http\Controllers\Admin\shipping_costController@index')->defaults('_config', [
            'view' => 'shipping_cost::admin.index',
        ])->name('admin.shipping_cost.index');

});