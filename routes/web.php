<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/item', 'ItemController@index')->name('item');
Route::get('/remove/{id}', 'ItemController@remove')->name('remove');
Route::get('/removed/records', 'ItemController@removed_records')->name('removed.records');

Route::resource('products','ProductController');
