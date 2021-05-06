<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $roles = Role::all();
        return view('roles.index',compact('roles'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data=request()->validate([
            'role_name'=>'required|max:255',
        ],
        [
            'role_name.required'=>'Ingrese nombre del rol',
            'role_name.max'=>'Maximo 255 caracteres para el nombre del rol',
        ]);
        $role=new Role();
        $role->role_name=$request->role_name;
        $role->save();
        return redirect()->route('roles.index')->with('datos','Registro Nuevo Guardado ...!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $data=request()->validate([
            'role_name'=>'required|max:255',
        ],
        [
            'role_name.required'=>'Ingrese nombre del rol',
            'role_name.max'=>'Maximo 255 caracteres para el nombre del rol',
        ]);
        
        Role::findOrFail($id)->update($request->all());
        return redirect()->route('roles.index')->with('datos','Registro Actualizado ... !');
    }

    public function destroy($id)
    {
        //
    }
}
