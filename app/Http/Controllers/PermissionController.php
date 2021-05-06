<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Permission;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $permissions = Permission::all();
        return view('permissions.index',compact('permissions'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data=request()->validate([
            'perm_description' => 'required|max:255'
        ],
        [
            'perm_description.required'=>'Ingrese nombre del permiso',
            'perm_description.max'=>'Maximo 255 caracteres para el nombre del permiso',
        ]);
        $permission=new Permission();
        $permission->perm_description = $request->perm_description;
        $permission->save();
        return redirect()->route('permissions.index')->with('datos','Registro Nuevo Guardado ...!');
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
            'perm_description' => 'required|max:255'
        ],
        [
            'perm_description.required'=>'Ingrese nombre del permiso',
            'perm_description.max'=>'Maximo 255 caracteres para el nombre del permiso',
        ]);
        Permission::findOrFail($id)->update($request->all());
        return redirect()->route('permissions.index')->with('datos','Registro Actualizado ... !');
    }

    public function destroy($id)
    {
        //
    }
}
