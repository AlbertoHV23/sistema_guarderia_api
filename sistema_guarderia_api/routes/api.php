<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// #*SISTEMA
// Route::get('/sistema','App\Http\Controllers\System\SystemController@index')->name('sistema.index');

#* Test route
Route::get('users/all','App\Http\Controllers\UserController@getAllUsers')->name('GetAll.Users');
// Route::post('users/create','App\Http\Controllers\UserController@createUser')->name('Create.Users');
Route::post('users/create','App\Http\Controllers\UserController@Create')->name('Create.Users');

#USERS
Route::post('users/create','App\Http\Controllers\RegisterController@store')->name('Create.Users');
Route::post('users/login','App\Http\Controllers\LoginController@loginUser')->name('User.test');

// ROLES
Route::post('roles/create','App\Http\Controllers\RolesController@store')->name('Create.Roles');
Route::get('roles/all','App\Http\Controllers\RolesController@dataindex')->name('GetAll.Roles');

#PERSONAL
Route::post('personal/create','App\Http\Controllers\PersonalController@store')->name('Create.Personal');
Route::get('personal/all','App\Http\Controllers\PersonalController@dataindex')->name('GetAll.Personal');


#KIDS
Route::post('kid/create','App\Http\Controllers\KidsController@store')->name('Create.Kid');
Route::get('kid/all','App\Http\Controllers\KidsController@dataindex')->name('GetAll.Kid');


#EXPEDIENTE MEDICO
Route::post('expediente/create','App\Http\Controllers\ExpedienteController@store')->name('Create.Expediente');
Route::get('expediente/all','App\Http\Controllers\ExpedienteController@dataindex')->name('GetAll.Expediente');

