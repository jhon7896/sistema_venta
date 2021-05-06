<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductColors;
use App\Models\ProductSizes;
use App\Models\Size;
use App\Models\Supplier;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $suppliers = Supplier::all();
        $categories = Category::all();
        $sizes = Size::all();
        $products = Product::all();
        return view('products.index', compact('suppliers', 'categories', 'sizes', 'products'));
    }

    public function create()
    {
        $suppliers = Supplier::all();
        $categories = Category::all();
        $sizes = Size::all();
        $colors = COlor::all();
        $products = Product::all();
        return view('products.create', compact('suppliers', 'categories', 'sizes', 'colors', 'products'));
    }

    public function store(Request $request)
    {
        
            // Products
            $product = new Product();

            // prod_id information
            if (Product::all()->count()) {
                $last_prod_id = Product::all()->last()->prod_id+1;
            } else {
                $last_prod_id = 1; //Siguiente ID para el registro de Alumnos
            }

            // información general
            $product->prod_id = $last_prod_id;
            $product->cate_id = $request->cate_id;
            $product->prod_name = $request->prod_name;
            $product->prod_description = $request->prod_description;

            // information general - image
            if ($request->hasFile('prod_image'))
            {
                $file = $request->file('prod_image');
                $destinationPath = 'img/productos/';
                $filename = time(). '_' . $file->getClientOriginalName();
                $uploadSuccess = $request->file('prod_image')->move($destinationPath, $filename);
                $product->prod_image = $filename;
            }

            // información específica
            $product->supp_id = $request->supp_id;
            $product->prod_stock = $request->prod_stock;

            // información costo
            $product->prod_purchase_price = $request->prod_purchase_price;
            $product->prod_sale_price = $request->prod_sale_price;
            $product->prod_state = '1';
            $product->save();

            //colors
            $colors = $request->idcolors;
            foreach ($colors as $col) {
                $pcolor = new ProductColors();
                $pcolor->prod_id = $last_prod_id;
                $pcolor->color_id = $col;
                $searched_color = Color::findOrFail($col);
                $pcolor->pcol_name = $searched_color->color_name;
                $pcolor->pcol_rgb = $searched_color->color_rgba;
                $pcolor->save();
            }
            // stock colors
            $color_stocks = $request->colorstocks;
            foreach ($color_stocks as $color_stock)
            {
                DB::table('product_colors')->where('prod_id', $last_prod_id)->update(['pcol_stock' => $color_stock]);
            }
            

            // sizes
            $sizes = $request->idsizes;
            foreach ($sizes as $siz) {
                $psize = new ProductSizes();
                $psize->prod_id = $last_prod_id;
                $psize->size_id = $siz;
                $searched_size = Size::findOrFail($siz);
                $psize->psiz_name = $searched_size->size_name;
                $psize->save();
            }
            
            // stock sizes
            $size_stocks = $request->sizestocks;
            foreach ($size_stocks as $size_stock)
            {
                DB::table('product_sizes')->where('prod_id', $last_prod_id)->update(['psiz_stock' => $size_stock]);
            }
        
        return redirect()->route('products.index')->with('datos', 'Registro Nuevo Guardado ...!');
    }

    public function show($id)
    {
        $suppliers = Supplier::all();
        $categories = Category::all();
        $sizes = Size::all();
        $product = Product::findOrFail($id);
        $productsizes = DB::table('product_sizes')->where('prod_id', $id)->get();
        $productcolors = DB::table('product_colors')->where('prod_id', $id)->get();
        return view('products.show', compact('suppliers', 'categories', 'sizes', 'product', 'productsizes', 'productcolors'));
    }

    public function edit($id)
    {
        $suppliers = Supplier::all();
        $categories = Category::all();
        $colors = COlor::all();
        $sizes = Size::all();
        $psizes = DB::table('product_sizes')->where('prod_id', $id)->get();
        $pcolors = DB::table('product_colors')->where('prod_id', $id)->get();
        $product = Product::findOrFail($id);
        return view('products.edit', compact('suppliers', 'categories', 'sizes', 'colors', 'psizes', 'pcolors', 'product'));
    }

    public function update(Request $request, $id)
    {
        // actualizamos inputs
        Product::findOrFail($id)->update($request->all());

        // reiniciamos stock = 0
        $product = Product::find($id);
        $product->prod_stock = 0;

        // Agregar nuevos colors
        $colors = $request->idcolors;
        if (is_array($colors) || is_object($colors))
        {
            foreach ($colors as $col) {
                $pcolor = new ProductColors();
                $pcolor->prod_id = $id;
                $pcolor->color_id = $col;
                $searched_color = Color::findOrFail($col);
                $pcolor->pcol_name = $searched_color->color_name;
                $pcolor->pcol_rgb = $searched_color->color_rgba;
                $pcolor->save();
            }

            // Actualizar nuevos stock colors
            $color_stocks = $request->colorstocks;
            foreach ($color_stocks as $color_stock)
            {
                DB::table('product_colors')->where('prod_id', $id)->update(['pcol_stock' => $color_stock]);
            }
        }
        
        // Agregar nuevas sizes
        $sizes = $request->idsizes;
        if (is_array($sizes) || is_object($sizes))
        {
            foreach ($sizes as $siz) {
                $psize = new ProductSizes();
                $psize->prod_id = $id;
                $psize->size_id = $siz;
                $searched_size = Size::findOrFail($siz);
                $psize->psiz_name = $searched_size->size_name;
                $psize->save();
            }
            // Actualziar nuevas stock sizes
            $size_stocks = $request->sizestocks;
            foreach ($size_stocks as $size_stock)
            {
                DB::table('product_sizes')->where('prod_id', $id)->update(['psiz_stock' => $size_stock]);
            }
        }

        // stock sizes
        foreach($request->sizesid as $key => $value){ 

            $colors = ProductSizes::find($request->sizesid[$key]); 
            $colors->psiz_stock = $request->sizstocks[$key]; 
            $colors->save(); 
        }

        // stock colors
        foreach($request->colorsid as $key => $value){ 

            $colors = ProductColors::find($request->colorsid[$key]); 
            $colors->pcol_stock = $request->colstocks[$key]; 
            $colors->save();
            
            $product->prod_stock = $product->prod_stock + $colors->pcol_stock;
            $product->save();
        }

        

        // product image
        if ($request->hasFile('prod_image'))
        {
            $product = Product::findOrFail($id);
            $file = $request->file('prod_image');
            $destinationPath = 'img/productos/';
            $filename = time(). '_' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('prod_image')->move($destinationPath, $filename);
            $product->prod_image = $filename;
            $product->save();
        } 

        return redirect()->route('products.index')->with('datos', 'Registro Actualizado ... !');
    }

    public function destroy($id)
    {
        //
    }

    public function selectProduct($id){
        return Product::where('prod_id',$id)->get();
    }
}
