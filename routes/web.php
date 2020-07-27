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

Route::get('/', 'CrudController@index')->name('index');
Route::post('/', 'CrudController@store')->name('store');
Route::get('/{id}', 'CrudController@edit')->name('edit');
Route::put('/{id}', 'CrudController@update')->name('update');
Route::get('/delete/{id}', 'CrudController@delete')->name('delete');
