<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Supplier;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.index',compact('suppliers'));
    }

    public function create()
    {
        return view('suppliers.create');
    }

    public function store(Request $request)
    {
        $supplier=new Supplier();
        // personal information
        $supplier->supp_dni=$request->supp_dni;
        $supplier->supp_contact_title=$request->supp_contact_title;
        $supplier->supp_contact_name=$request->supp_contact_name;
        $supplier->supp_phone=$request->supp_phone;
        // address information
        $supplier->supp_address=$request->supp_address;
        $supplier->supp_city=$request->supp_city;
        $supplier->supp_region=$request->supp_region;
        $supplier->supp_country=$request->supp_country;
        // company information
        $supplier->supp_companyname=$request->supp_companyname;
        $supplier->supp_ruc	=$request->supp_ruc;
        $supplier->supp_homepage=$request->supp_homepage;
        // state information
        $supplier->supp_state='1';
        $supplier->save();
        return redirect()->route('suppliers.index')->with('datos','Registro Nuevo Guardado ...!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('suppliers.edit',compact('supplier'));
    }

    public function update(Request $request, $id)
    {
        Supplier::findOrFail($id)->update($request->all());
        return redirect()->route('suppliers.index')->with('datos','Registro Actualizado ... !');
    }

    public function destroy($id)
    {
        //
    }
}
