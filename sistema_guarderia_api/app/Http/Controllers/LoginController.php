<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function index(){
        return view('Auth.login');
        // return view('Front.home');
    }

    public function loginUser(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);;

        $user = User::where('email',$request->email)->first();

        if (Auth::attempt($credentials)){
            // $request->session()->regenerate();
            // return "You are login"; 
            return redirect()->to('/sistema'); 

        }
    

        // if(Hash::check(request('password'),$user->getAuthPassword())){
        //     // $token = $user->createToken(time())->plainTextToken;
        //     $user = Auth::user();
        //     // return view('System.home',compact('user'));
        //     return redirect()->to('/sistema');
        // }

        echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";
        return redirect()->to('/login');

    }

    
}
