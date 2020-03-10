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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('default');
Route::get('/admin','AdminController@panel')->name('admin');
Route::get('/admin/create', 'AdminController@createAdmin')->name('admin.create');
Route::post('/admin/save', 'AdminController@save')->name('admin.save');
