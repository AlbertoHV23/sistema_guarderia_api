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

# ROOT
Route::get('/', function () {return view('Front.home');});


// #* HOME
// Route::get('home','App\Http\Controllers\Front\HomeController@index')->name('Home');

#*
Route::get('sistema','App\Http\Controllers\System\SystemController@index')->name('Sistema');

// Auth::routes();
