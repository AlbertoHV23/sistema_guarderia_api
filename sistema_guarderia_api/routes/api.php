<?php

use Illuminate\Http\Request;
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

#* Test route
Route::get('users/all','App\Http\Controllers\UserController@getAllUsers')->name('GetAll.Users');
Route::post('users/create','App\Http\Controllers\UserController@createUser')->name('Create.Users');

// ROLES
Route::post('roles/create','App\Http\Controllers\RolesController@Create')->name('Create.Roles');
Route::get('roles/all','App\Http\Controllers\RolesController@GetAll')->name('GetAll.Roles');


