<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Roles;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    //
    public function index_create()
    {
        $data = Roles::all();
        return view('System.Personal.create', compact('data'));
    }

    public function index()
    {   
        return view('System.Personal.index');
    }

    public function dataindex(){
        return datatables(Employees::get())
            ->addColumn('btn', 'System.Personal.btn')
            ->rawColumns(['btn'])
            ->toJson();
    }
    // Get all
    public function GetAll()
    {
        return datatables()->of(Employees::query())->toJson();
        $data = Employees::all();
        return json_encode(['Status' => 'Success', 'data' => $data], 200);
    }


    //Create function
    public function Create(Request $request)
    {
        $data = new Employees();
        $data->fill($request->all());
        $data->save();

        return json_encode(['Status' => 'Success', 'data' => $data], 200);
    }


    //   CREATE PERSONAL
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'CURP' => 'required',
            'NSS' => 'required',
            'mail' => 'required',
            'imagen' => 'required',
            'gender' => 'nullable',
            'rol_id' => 'required',

        ]);

        $data = new Employees();
        $data->fill($request->all());

        $data->save();

        // flash('Rol Agregado correctamente')->success();
        // return view('System.Roles.create');
        return redirect(route('roles.create'));
    }
}
