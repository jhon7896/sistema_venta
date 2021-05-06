<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sale;

use App\Models\SaleDetail;

use App\Models\Product;

use DB;

class SaleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sales = Sale::all();
        return view('sales.index',compact('sales'));
    }

    public function create()
    {
        $sales = Sale::all();
        $products = DB::table('products')->where('prod_stock','>','0')->get();
        return view('sales.create', compact('sales', 'products'));
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
        //
    }

    public function destroy($id)
    {
        //
    }
}
