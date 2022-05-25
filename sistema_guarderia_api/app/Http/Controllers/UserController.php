<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Get All users
    public function getAllUsers(){
        return User::all();
    }

    // Create User
    public function createUser(Request $request){
        $data = new User();

        $data->fill($request->all());
        $data->save();

        return json_encode(['Status' => 'Success','data' => $data],200);
    }

    public function getSessionUser(){
        session_start();
        $value = $_SESSION['email'];
        $data = User::where('email',$value)->first();
        return view('System.Profile.edit',compact('data'));
    }
}
