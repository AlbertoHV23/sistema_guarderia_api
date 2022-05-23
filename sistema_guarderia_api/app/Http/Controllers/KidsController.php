<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KidsController extends Controller
{
    //
    public function index_create()
    {
       return view('System.Kids.create');
    }
}
