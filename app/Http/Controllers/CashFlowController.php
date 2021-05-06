<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CashFlow;

class CashFlowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $flows = CashFlow::all();
        return view('cashflows.index', compact('flows'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Crear objeto CashFlow
        $flow=new CashFlow();

        // cash_id information
        if (CashFlow::all()->count()) {
            $last_cash_id = CashFlow::all()->last()->cash_id+1;
        } else {
            $last_cash_id = 1; //Siguiente ID para el registro de Alumnos
        }

        // general information about cash flows
        $flow->cash_id=$last_cash_id;
        $flow->cash_description=$request->cash_description;
        $flow->cash_income=$request->cash_income;
        $flow->cash_expense=$request->cash_expense;

        // cash_running_total information
        if (CashFlow::all()->count()) {
            $last_cash_running_total = CashFlow::all()->last()->cash_running_total;
        } else {
            $last_cash_running_total = 0; //Siguiente ID para el registro de Alumnos
        }

        // sumar si se hace un ingreso
        if($request->cash_income != null)
        {
            $flow->cash_running_total=$last_cash_running_total + $flow->cash_income;
        }

        // restar si se hace un egreso
        if($request->cash_expense != null)
        {
            $flow->cash_running_total=$last_cash_running_total - $flow->cash_expense;
        }

        $flow->save();
        return redirect()->route('flows.index')->with('datos','Registro Nuevo Guardado ...!');
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
        CashFlow::findOrFail($id)->update($request->all());
        return redirect()->route('flows.index')->with('datos','Registro Actualizado ... !');
    }

    public function destroy($id)
    {
        //
    }
}
