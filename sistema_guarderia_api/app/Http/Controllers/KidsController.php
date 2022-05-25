<?php

namespace App\Http\Controllers;

use App\Models\Kids;
use Illuminate\Http\Request;

class KidsController extends Controller
{
    //
    public function index_create()
    {
        return view('System.Kids.create');
    }

    public function index()
    {
        return view('System.Kids.index');
    }

    public function GetAll()
    {
        return datatables()->of(Kids::query())->toJson();
        $data = Kids::all();
        return json_encode(['Status' => 'Success', 'data' => $data], 200);
    }

    public function dataindex(){
        return datatables(Kids::get())
            ->addColumn('btn', 'System.Kids.btn')
            ->rawColumns(['btn'])
            ->toJson();
    }


    //Create function
    public function Create(Request $request)
    {
        $data = new Kids();
        $data->fill($request->all());
        $data->save();

        return json_encode(['Status' => 'Success', 'data' => $data], 200);
    }

    //   CREATE PERSONAL
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'CURP' => 'required',
            'mail' => 'required',
            'imagen' => 'required',
            'gender' => 'nullable',

        ]);

        echo $request;

        $data = new Kids();
        $data->fill($request->all());
        $data->save();
        echo $data;

        // flash('Rol Agregado correctamente')->success();
        // return view('System.Roles.create');
        return redirect(route('kids.create'));
    }
}
