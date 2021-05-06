<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $category=new Category();
        $category->cate_name=$request->cate_name;
        $category->cate_description=$request->cate_description;
        $category->cate_state = '1';
        $category->save();
        return redirect()->route('categories.index')->with('datos','Registro Nuevo Guardado ...!');
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
        Category::findOrFail($id)->update($request->all());
        return redirect()->route('categories.index')->with('datos','Registro Actualizado ... !');
    }

    public function destroy($id)
    {
        //
    }
}
