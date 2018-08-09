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

Route::get('/', 'WelcomeController@index');
Route::get('/branches/{id}', 'WelcomeController@branches');
Route::get('/branches', 'WelcomeController@allbranches');
Route::get('/product/{id}', 'ProductController@products');
Route::get('/productbrand/{brand}', 'ProductController@productbrand');
Route::get('/products', 'ProductController@allproducts');
Route::get('/single/{id}', 'ProductController@single');

Route::group(['prefix'=>'admin'],function(){
	Auth::routes();
	Route::get('/', 'HomeController@index')->name('home');
	Route::resource('shop', 'Admin\ShopController');
	Route::resource('branch', 'Admin\BranchController');
	Route::resource('item', 'Admin\ItemController');
});

