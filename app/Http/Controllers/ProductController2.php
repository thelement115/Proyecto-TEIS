<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller {

    public function create() {
        $data = []; //to be sent to the view
        $data["title"] = "Create product";

        return view('product.create')->with("data",$data);
    }
    
    public function show($id) {
        $data = []; //to be sent to the view
        $product = Product::findOrFail($id);
        $data["title"] = $product->getName();
        $data["product"] = $product;

        return view('product.show')->with("data",$data);
    }

    public function save(Request $request) {
        $request->validate([
            "name" => "required",
            "price" => "required|numeric|gt:0",
            "description" => "required|max:255"
            // "filename" => "required"
        ]);
        Product::create($request->only(["name","price","description"]));    

        return back()->with('created','Elemento creado satisfactoriamente');
    }

    public function index(Request $request) {
        
        $data = []; //to be sent to the view
        $data["title"] = "List of products";
        $data["products"] = Product::all();

        return view('product.index')->with("data",$data);   
    }

    // public function destroy($id) {
    //     $product = Product::find($id);
    //     $product->delete();
        
    //     return redirect('product/index')->with('deleted','El producto ha sido eliminado');
    // }

    // public function sort() {
    //     $sorted = DB::table('products')
    //                 ->orderBy('price', 'desc')
    //                 ->get();

    //     dd($sorted);
    // }

}
