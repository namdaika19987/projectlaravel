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

//Fontend
Route::get('/','App\Http\Controllers\HomeController@index');

Route::get('/Trang-Chủ', 'App\Http\Controllers\HomeController@index');




//Backend
Route::get('/admin', 'App\Http\Controllers\AdminController@index');

Route::get('/dashboard', 'App\Http\Controllers\AdminController@show_dashboard');