<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Comment;
use App\Interfaces\ImageStorage;

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
            "prize" => "required|numeric|gt:0",
            "description" => "required|max:255"
            // "filename" => "required"
        ]);
        $product = new Product();
        if($request->hasfile('productImage')){
            $storeInterface = app(ImageStorage::class);
            $storeInterface->store($request);
            $cover = $request->file('productImage');
            $product->original_filename = $cover->getClientOriginalName();
            $product->mime = $cover->getClientMimeType();
            $extension = $cover->getClientOriginalExtension();
            $product->filename = 'uploads/'.$cover->getFilename().'.'.$extension;
        }
        $product->name = $request->name;
        $product->prize = $request->prize;
        $product->description = $request->description;
        $product->save();
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

    public function destroy($id) {
        $product = Product::find($id);
        $product->setVisible(false);
        $product->save();
        return back();
    }
}
