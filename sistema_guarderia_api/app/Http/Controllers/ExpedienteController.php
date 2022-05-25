<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use App\Models\Kids;
use Illuminate\Http\Request;

class ExpedienteController extends Controller
{
    //
    public function index_create()
    {
        $data = Kids::all();
        return view('System.Expediente.create',compact('data'));
    }

    public function index()
    {
        return view('System.Expediente.index');
    }

    
    public function dataindex(){
        return datatables(Expediente::get())
            ->addColumn('btn', 'System.Expediente.btn')
            ->rawColumns(['btn'])
            ->toJson();
    }

    //   CREATE PERSONAL
    public function store(Request $request)
    {
        $request->validate([
            'weight' => 'required',
            'height' => 'required',
            'blood_type' => 'nullable',
            'allergies' => 'nullable',
            'medicines' => 'nullable',
            'vaccines' => 'nullable',
            'kid_id' => 'required',

        ]);

        $data = new Expediente();
        $data->fill($request->all());

        $data->save();

        // flash('Expediente Medico Agregado correctamente')->success();
        // return view('System.Roles.create');
        return redirect(route('expediente.create'));
    }
}
