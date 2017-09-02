<?php

Auth::routes();

Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::get('/productos', 'ProductsController@index')->name('admin.products.index');
    Route::get('/productos/nuevo', 'ProductsController@create')->name('admin.products.create');
    Route::post('/productos/nuevo', 'ProductsController@store')->name('admin.products.store');
    Route::get('/productos/{id}/editar', 'ProductsController@edit')->name('admin.products.edit');
    Route::post('/productos/{id}/editar', 'ProductsController@update')->name('admin.products.update');

    Route::get('/catalogos', 'CatalogsController@index')->name('admin.catalogs.index');
});

Route::get('/', 'PagesController@home')->name('home');
Route::get('/{slug}', 'PagesController@show');
Route::get('/p/{slug}', 'CatalogController@detail');
