<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index',compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $customer=new Customer();
        // personal information
        $customer->cust_dni=$request->cust_dni;
        $customer->cust_last_name=$request->cust_last_name;
        $customer->cust_maiden_name=$request->cust_maiden_name;
        $customer->cust_first_name=$request->cust_first_name;
        $customer->cust_other_name=$request->cust_other_name;
        $customer->cust_cellphone=$request->cust_cellphone;
        $customer->cust_sexo=$request->cust_sexo;
        // address information
        $customer->cust_address=$request->cust_address;
        $customer->cust_phone=$request->cust_phone;
        $customer->cust_city=$request->cust_city;
        $customer->cust_region=$request->cust_region;
        $customer->cust_country=$request->cust_country;
        // company information
        $customer->cust_company_name=$request->cust_company_name;
        $customer->cust_contact_title=$request->cust_contact_title;
        $customer->cust_contact_name=$request->cust_contact_name;
        $customer->cust_ruc=$request->cust_ruc;
        $customer->cust_contact_phone=$request->cust_contact_phone;
        // state information
        $customer->cust_state='1';
        $customer->save();
        return redirect()->route('customers.index')->with('datos','Registro Nuevo Guardado ...!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit',compact('customer'));
    }

    public function update(Request $request, $id)
    {
        Customer::findOrFail($id)->update($request->all());
        return redirect()->route('customers.index')->with('datos','Registro Actualizado ... !');
    }

    public function destroy($id)
    {
        //
    }
}
