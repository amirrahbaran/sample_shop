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

Route::get('/', function(){
    return redirect()->route('products.index');
});

Route::get('/products', 'ProductController@index')->name('products.index');

Route::get('/products/create', 'ProductController@create')->name('products.create');

Route::get('/products/{id}', 'ProductController@show');

Route::post('/products', 'ProductController@store')->name('products.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
