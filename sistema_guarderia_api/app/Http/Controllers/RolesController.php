<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{   

    public function index()
    {
        return view('System.Roles.create');
    }
    // Get all
    public function GetAll(){
        return datatables()->of(Roles::query())->toJson();
        $data = Roles::all();
        return json_encode(['Status' => 'Success','data' => $data],200);
    }

    //Create function
    public function Create(Request $request){
        $data = new Roles();
        $data->fill($request->all());
        $data->save();

        return json_encode(['Status' => 'Success','data' => $data],200);
    }
}
