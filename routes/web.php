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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// -- Store Routes
Route::get('/stores', 'StoreController@index');
Route::get('/stores/create', 'StoreController@create');
Route::post('/stores', 'StoreController@store');
Route::get('/stores/{store}', 'StoreController@show');
Route::get('/stores/{store}/edit', 'StoreController@edit');
Route::patch('/stores/{store}', 'StoreController@update');
Route::delete('/stores/{store}', 'StoreController@destroy');

// -- Pruducts Routes
Route::get('/stores/{store}/products', 'ProductController@index');
Route::get('/stores/{store}/products/create', 'ProductController@create');
Route::post('/stores/products', 'ProductController@store');
