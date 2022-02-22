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

Route::get('/', 'App\Http\Controllers\UploadController@upload');
Route::get('/upload', 'App\Http\Controllers\UploadController@newcreate');
Route::post('/upload/proses', 'App\Http\Controllers\UploadController@create');
Route::get('/upload/erase/{id}', 'App\Http\Controllers\UploadController@erase');
Route::get('/upload/find','App\Http\Controllers\UploadController@find');
Route::get('/upload/moredetails/{id}','App\Http\Controllers\UploadController@seemore');
Route::get('/upload/edit/{id}', 'App\Http\Controllers\UploadController@edit');
Route::patch('/{id}', 'App\Http\Controllers\UploadController@update')->name('update');
