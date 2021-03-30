<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('index', 'App\Http\Controllers\UserController@index')->name('home');
Route::get('clear-users', 'App\Http\Controllers\UserController@clearUsers')->name('clear.users');
Route::post('import-file', 'App\Http\Controllers\UserController@import')->name('import.file');
Route::post('send-email', 'App\Http\Controllers\UserController@sendEmail')->name('send.email');
Route::get('content-email', 'App\Http\Controllers\UserController@contentEmail')->name('content.email');
Route::get('/', function () {
    return view('welcome');
});
