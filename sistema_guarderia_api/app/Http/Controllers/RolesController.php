<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{   

    public function index_create()
    {   
        return view('System.Roles.create');
    }

    public function index()
    {   
        $data = Roles::all();
        return view('System.Roles.index',compact('data'));
    }
    // Get all
    public function GetAll(){
        return datatables()->of(Roles::query())->toJson();
        $data = Roles::all();
        return json_encode(['Status' => 'Success','data' => $data],200);
    }

    public function dataindex(){
        return datatables(Roles::get())
            ->addColumn('btn', 'System.Roles.btn')
            ->rawColumns(['btn'])
            ->toJson();
    }


    //Create function
    public function Create(Request $request){
        $data = new Roles();
        $data->fill($request->all());
        $data->save();

        return json_encode(['Status' => 'Success','data' => $data],200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required',
            'description' => 'nullable',
        ]);

        $data = new Roles();
        $data->fill($request->all());

        $data->save();

        // flash('Rol Agregado correctamente')->success();
        // return view('System.Roles.create');
        return redirect(route('roles.create'));
    }

    public function edit($id)
    {
        $data = Roles::find($id);
        // $cate = NoticiasCategoria::all();
        return view('System.Roles.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'role' => 'required',
            'description' => 'nullable',
        ]);

        $data = Roles::find($id);
        $data->fill($request->all());
        $data->save();

        // flash('Noticia Editada Correctamente')->success();
        return redirect(route('roles.index'));
    }
}
