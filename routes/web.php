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

use App\Http\Controllers\BuyOrderController;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('default');
Route::get('/admin','AdminController@panel')->name('admin');
Route::get('/admin/create', 'AdminController@createAdmin')->name('admin.create');
Route::post('/admin/save', 'AdminController@save')->name('admin.save');
Route::get('/admin/user', 'AdminController@modifyUser')->name('admin.user');
Route::patch('/admin/user/ban/{id}', 'AdminController@banUser')->name('admin.ban');
Route::get('/admin/product/modify', 'AdminController@modifyProducts')->name("product.modify");
Route::get('/admin/product/create', 'ProductController@create')->name("product.create");

Route::get('/product/index', 'ProductController@index')->name("product.index");
Route::get('/product/show/{id}', 'ProductController@show')->name("product.show");
Route::post('/product/store', 'ProductController@store')->name("product.save");
Route::delete('/product/{id}', 'ProductController@destroy')->name("product.destroy");

Route::get('/image/index', 'ImageController@index')->name('image.index');
Route::post('/image/save', 'ImageController@save')->name('image.save');

Route::get('/buy/{id}','BuyOrderController@index')->name('checkOut.index');
Route::post('buy/checkout/{id}','BuyOrderController@save')->name('checkOut.save');
