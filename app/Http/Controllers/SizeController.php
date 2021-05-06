<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Size;

class SizeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sizes = Size::all();
        return view('sizes.index', compact('sizes'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $size=new Size();
        $size->size_name=$request->size_name;
        $size->save();
        return redirect()->route('sizes.index')->with('datos','Registro Nuevo Guardado ...!');
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
        Size::findOrFail($id)->update($request->all());
        return redirect()->route('sizes.index')->with('datos','Registro Actualizado ... !');
    }

    public function destroy($id)
    {
        //
    }
}
