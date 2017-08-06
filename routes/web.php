<?php

Auth::routes();

Route::get('/', 'PagesController@home')->name('home');
Route::get('/{slug}', 'PagesController@show');
Route::get('/p/{slug}', 'CatalogController@detail');

Route::get('/home', 'HomeController@index')->name('admin.dashboard');
