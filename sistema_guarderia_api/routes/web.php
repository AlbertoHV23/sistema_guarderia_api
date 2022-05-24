<?php

use App\Http\Controllers\LoginController;
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
Route::get('/', function () {return view('Front.home');})->name('home');;

#LOGIN
Route::get('/login','App\Http\Controllers\LoginController@index')->name('login.index');

#Registro
Route::get('/registro','App\Http\Controllers\RegisterController@index')->name('registro.index');

#*SISTEMA
Route::get('/sistema','App\Http\Controllers\System\SystemController@index')->name('sistema.index');


#PERSONAL:
Route::get('/sistema/personal/registrar','App\Http\Controllers\PersonalController@index_create')->name('personal.create');

#KIDS
Route::get('/sistema/niños/registrar','App\Http\Controllers\KidsController@index_create')->name('kids.create');

#ROLES
Route::get('/sistema/roles/registrar','App\Http\Controllers\RolesController@index')->name('roles.create');


// Auth::routes();
