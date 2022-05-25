<?php

namespace App\Http\Controllers;

use App\Models\Foul;
use App\Models\Kids;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class FoulController extends Controller
{
    //
    public function index_create()
    {
        $data = Kids::all();
        return view('System.Faltas.create',compact('data'));
    }

    public function index()
    {
        return view('System.Faltas.index');
    }

    public function dataindex(){
        return datatables(Foul::get())
            ->addColumn('btn', 'System.Faltas.btn')
            ->rawColumns(['btn'])
            ->toJson();
    }

    //   CREATE PERSONAL
    public function store(Request $request)
    {
        $request->validate([
            'reason' => 'required',
            'description' => 'nullable',
            'kid_id' => 'required',

        ]);

        $data = new Foul();
        $data->fill($request->all());

        $data->save();

        // flash('Expediente Medico Agregado correctamente')->success();
        // return view('System.Roles.create');
        return redirect(route('faltas.create'));
    }

    
}
