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

// ROLES
Route::post('roles/create','App\Http\Controllers\RolesController@store')->name('Create.Roles');
Route::get('roles/all','App\Http\Controllers\RolesController@dataindex')->name('GetAll.Roles');

#PERSONAL
Route::post('personal/create','App\Http\Controllers\PersonalController@store')->name('Create.Personal');
Route::get('personal/all','App\Http\Controllers\PersonalController@dataindex')->name('GetAll.Personal');

#USERS
Route::post('users/create','App\Http\Controllers\RegisterController@store')->name('Create.Users');
Route::post('users/login','App\Http\Controllers\LoginController@loginUser')->name('User.test');


// Route::middleware(['auth'])->prefix('sistema')->name('sistema.')->group(function () {

//     Route::prefix('test')->name('test.')->group(function (){
//         Route::get('index','App\Http\Controllers\LoginController@index')->name('login');
//         // Route::get('create','App\Http\Controllers\PermissionController@createRoles')->name('create');
//         // Route::put('store','App\Http\Controllers\PermissionController@sotreRoles')->name('store');
//         // Route::delete('delete','App\Http\Controllers\PermissionController@deleteRoles')->name('delete');
//         // Route::get('data','App\Http\Controllers\PermissionController@dataRoles')->name('data');
//     });


    
// });
