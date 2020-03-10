<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Lang;

class CartController extends Controller
{
    public function index(Request $request){
        $data = []; //to be sent to the view
        $data["title"] = Lang::get('messages.index');
        $data["products"] = $request->session()->get("products");
        return view('cart.index')->with("data",$data);
    }

    public function save(Request $request){
        $name = $request->input('name');
        $price = $request->input('price');
        $description = $request->input('description');

        $product = new Product;

        $product->setName($name);
        $product->setPrice($price);
        $product->setDescription($description);
        $products = $request->session()->get("products");
        $products[] = $product;
        $request->session()->put('products', $products);
        return back();
    }

    public function delete(Request $request){
        $request->session()->forget('products');
        return back();
    }
}
