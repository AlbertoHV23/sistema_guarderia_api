<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    //
    public function index(){
        return view('Auth.register');
        // return view('Front.home');
    }

    public function store(Request $request)
    {
     
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->password); 
        $user->save();
        
        auth()->login($user);
        
        return redirect()->to('/sistema');
    }
}
