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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/user/config','UserController@config')->name('configuracionuser');
Route::post('/user/config','UserController@update')->name('update');
Route::get('/user/avatar/{filename}','UserController@getImage')->name('user.avatar');

Route::get('/image/save', 'ImageController@create')->name('user.crearimagen');
Route::post('/image/save','ImageController@save')->name('save');
Route::get('/image/file/{filename}', 'ImageController@getImage')->name('image.verimagen');