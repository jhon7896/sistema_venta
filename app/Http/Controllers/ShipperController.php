<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Shipper;

class ShipperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $shippers = Shipper::all();
        return view('shippers.index',compact('shippers'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data=request()->validate([
            'ship_companyname'=>'required|max:255',
            'ship_phone' => 'required|max:9',
        ],
        [
            'ship_companyname.required'=>'Ingrese nombre de la compañia de transporte',
            'ship_companyname.max'=>'Maximo 255 caracteres para de la compañia de transporte',
            'ship_phone.required'=>'Ingrese numero del celular',
            'ship_phone.max'=>'Maximo 9 caracteres para el numero del celular',
        ]);
        $shipper=new Shipper();
        $shipper->ship_companyname=$request->ship_companyname;
        $shipper->ship_phone=$request->ship_phone;
        $shipper->save();
        return redirect()->route('shippers.index')->with('datos','Registro Nuevo Guardado ...!');
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
            'ship_companyname'=>'required|max:255',
            'ship_phone' => 'required|max:9',
        ],
        [
            'ship_companyname.required'=>'Ingrese nombre de la compañia de transporte',
            'ship_companyname.max'=>'Maximo 255 caracteres para de la compañia de transporte',
            'ship_phone.required'=>'Ingrese numero del celular',
            'ship_phone.max'=>'Maximo 9 caracteres para el numero del celular',
        ]);
        Shipper::findOrFail($id)->update($request->all());
        return redirect()->route('shippers.index')->with('datos','Registro Actualizado ... !');
    }

    public function destroy($id)
    {
        //
    }
}
