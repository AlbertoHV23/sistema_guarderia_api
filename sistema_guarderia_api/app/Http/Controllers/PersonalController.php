<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
class PersonalController extends Controller
{
     //
     public function index_create()
     {
        $data = Roles::all();
        return view('System.Personal.create',compact('data'));
     }
}
