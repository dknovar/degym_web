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

Route::get('/', 'HomeController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// // management Class
// Route::get('class', 'ClassController@index');
// Route::get('class/create', 'ClassController@create');
// Route::get('class/{class}', 'ClassController@show');
// Route::post('class', 'ClassController@store');
// Route::delete('class/{class}', 'ClassController@destroy');
// Route::get('class/{class}/edit','ClassController@edit');
// Route::patch('class/{class}','ClassController@update');
Route::resource('class','ClassController');
// managagement User
Route::resource('user', 'UserController');
// managegement jadwal
Route::resource('jadwal', 'JadwalController');
