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

Route::get('/', 'PageController@index');

Route::get('/about-us', 'PageController@aboutUs');

Route::get('/products', function () {
    $products = DB::table('products')
        ->orderBy('name')
        ->get();
    return view('products.index', compact('products'));
});

Route::get('/products/{id}', function ($id) {
    $product = DB::table('products')
        ->where('id', '=', $id)
        ->first();
    return view('products.show', compact('product'));
});