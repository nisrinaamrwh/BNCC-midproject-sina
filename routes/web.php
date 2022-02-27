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

Route::get('books', 'App\Http\Controllers\BookController@index');

Route::get('/books/manage', 'App\Http\Controllers\BookController@showAllBook');
route::get('/books/create', 'App\Http\Controllers\BookController@create');
Route::post('/books/create', 'App\Http\Controllers\BookController@store');
Route::get('/books/{id}', 'App\Http\Controllers\BookController@edit');
Route::put('/books/{id}', 'App\Http\Controllers\BookController@update');
Route::delete('games/{id}', 'App\Http\Controllers\BookController@destroy');

Route::get('/', 'App\Http\Controllers\AppController@index');
