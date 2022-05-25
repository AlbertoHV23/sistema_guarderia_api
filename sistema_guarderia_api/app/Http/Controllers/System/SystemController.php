<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class SystemController extends Controller
{
    //
    public function index()
    {

        session_start();
        try {
            $value = $_SESSION['email'];
            if ($value !=""){
                return view('System.home'); 
            }
            else{
                return view('Front.home');
            }
        } catch (\Throwable $th) {
            //throw $th;
            return view('Front.home');
        }
     
        
    }
}
