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
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/new-product', 'ProductController@create')->name('newProduct');
Route::post('/new-product', 'ProductController@store')->name('newProduct');
Route::get('/products/{id}', 'ProductController@show')->name('productShow');
Route::get('/products', 'ProductController@index')->name('productList');
Route::get('/products/edit/{id}', 'ProductController@edit')->name('editProduct');
Route::get('/account-settings', 'HomeController@accountSettings')->name('accountSettings');
Route::get('/store-settings', 'StoreController@updateStore')->name('storeSettings');
Route::get('/view-store', 'StoreController@index')->name('viewStore');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::post('/store-settings', 'StoreController@update')->name('updateStore');
Route::get('/billing', 'BankingDetailController@create')->name('addCard');