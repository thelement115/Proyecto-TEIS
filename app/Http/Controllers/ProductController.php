<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ImageStorage;
use App\Product;
use DB;

class ProductController extends Controller {

    public function index() {
        $data = []; 
        $data["title"] = "List of products";
        $data["products"] = Product::all();
        return view('product.index')->with("data",$data);
    }


    public function create() {
        $data = []; 
        $data["title"] = "Create product";

        return view('product.create')->with("data",$data);
    }


    public function store(Request $request) {
        $request->validate([
            "name" => "required",
            "price" => "required|numeric|gt:0",
            "description" => "required|max:255",
            "productImage" => "required"
        ]);
        $storeInterface = app(ImageStorage::class);
        $storeInterface->store($request);
        Product::create($request->all());    

        return back()->with('created','Elemento creado satisfactoriamente');
    }

    public function show($id) {
        $data = []; 
        $product = Product::findOrFail($id);
        $data["title"] = $product->getName();
        $data["product"] = $product;

        return view('product.show')->with("data",$data);
    }

    public function destroy(Product $id) {
        $id->delete();

        return redirect()->route('product.index');
    }
}
