<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ImageStorage;
use App\Product;
use App\Comment;
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
        $validatedData = $request->validate(Product::$createRules);
        Product::create($request->only(["name","prize","description"]));

        return back()->with('created','Elemento creado satisfactoriamente');
    }

    public function show($id) { 

        $data = [];
        $product = Product::findOrFail($id);
        $comment = $product->Comments()->get();
        $data["title"] = $product->getName();
        $data["product"] = $product;
        $data["comments"] = $comment;
        
    
        return view('product.show')->with("data",$data);
    }

    public function destroy(Product $id) {
        Product::destroy($id->getId());
        return back();
    }
}
