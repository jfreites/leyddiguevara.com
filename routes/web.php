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

    Route::get('/publicaciones', 'PostsController@index')->name('admin.posts.index');
    Route::get('/publicaciones/nuevo', 'PostsController@create')->name('admin.posts.create');
    Route::post('/publicaciones/nuevo', 'PostsController@store')->name('admin.posts.store');
    Route::get('/publicaciones/{id}/editar', 'PostsController@edit')->name('admin.posts.edit');
    Route::post('/publicaciones/{id}/editar', 'PostsController@update')->name('admin.posts.update');
    Route::delete('/publicaciones/{id}', 'PostsController@delete')->name('admin.posts.delete');

    Route::get('/banners', 'BannersController@index')->name('admin.banners.index');
    Route::get('/banners/nuevo', 'BannersController@create')->name('admin.banners.create');
});

Route::post('/send/message', function () {
   return back()->with('message', 'Su mensaje fue enviado.');
});

Route::get('/', 'PagesController@home')->name('home');
Route::get('/{slug}', 'PagesController@show');
Route::get('/p/{slug}', 'CatalogController@detail');
Route::get('/{category}/{slug}', 'CmsController@show');

