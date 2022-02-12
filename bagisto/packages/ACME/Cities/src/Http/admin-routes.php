<?php

Route::group([
        'prefix'        => 'admin/cities',
        'middleware'    => ['web', 'admin']
    ], function () {

    Route::get('', 'ACME\Cities\Http\Controllers\Admin\CitiesController@index')->defaults('_config', [
        'view' => 'cities::admin.index',
    ])->name('admin.cities.index');


    Route::get('create', 'ACME\Cities\Http\Controllers\Admin\CitiesController@create')->defaults('_config', [
        'view' => 'cities::admin.create',
    ])->name('admin.cities.create');

    Route::post('create', 'ACME\Cities\Http\Controllers\Admin\CitiesController@store')->defaults('_config', [
        'redirect' => 'admin.cities.index',
    ])->name('admin.cities.store');

    Route::get('edit/{id}', 'ACME\Cities\Http\Controllers\Admin\CitiesController@edit')->defaults('_config', [
        'view' => 'cities::admin.edit',
    ])->name('admin.cities.edit');

    Route::post('edit/{id}', 'ACME\Cities\Http\Controllers\Admin\CitiesController@update')->defaults('_config', [
        'redirect' => 'admin.cities.index',
    ])->name('admin.cities.update');

    Route::post('/delete/{id}', 'ACME\Cities\Http\Controllers\Admin\CitiesController@destroy')->defaults('_config', [
        'redirect' => 'admin.cities.index',
    ])->name('admin.cities.delete');

});

