<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin/brand', 'Admin\BrandController@index')->name('admin.brand.index');
Route::get('/admin/brand/create', 'Admin\BrandController@create')->name('admin.brand.create');
Route::post('admin/brand/{brand}', 'Admin\BrandController@update')->name('admin.brand.update');
Route::get('admin/brand/{brand}/edit', 'Admin\BrandController@edit')->name('admin.brand.edit');
Route::post('/admin/brand', 'Admin\BrandController@store')->name('admin.brand.store');
Route::delete('admin/brand/{brand}', 'Admin\BrandController@destroy')->name('admin.brand.destroy');
