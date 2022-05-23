<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PersonalController extends Controller
{
     //
     public function index_create()
     {
        return view('System.Personal.create');
     }
}
