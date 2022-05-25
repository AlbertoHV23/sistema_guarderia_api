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
        
        return view('System.home');
    }
}
