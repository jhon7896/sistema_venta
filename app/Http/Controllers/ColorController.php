<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Color;

class ColorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $colors = Color::all();
        return view('colors.index', compact('colors'));
    }

    public function create()
    {
        $color=new Color();
        $color->color_name=$request->color_name;
        $color->color_rgba=$request->color_rgba;
        $color->save();
        return redirect()->route('colors.index')->with('datos','Registro Nuevo Guardado ...!');
    }

    public function store(Request $request)
    {
        //
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
        Color::findOrFail($id)->update($request->all());
        return redirect()->route('colors.index')->with('datos','Registro Actualizado ... !');
    }

    public function destroy($id)
    {
        //
    }
}
