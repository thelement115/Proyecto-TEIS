<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\item;
use Illuminate\Support\Facades\Lang;

class CartController extends Controller
{
    public function index(Request $request){
        $data = []; 
        $data["title"] = Lang::get('messages.index');
        //$data["products"] = $request->session()->get("products");
        $products=null;
        $ids = $request->session()->get("products");
        if($ids != null){
          //$products = DB::table('products')->whereIn('id', $ids)->get();
            $products = Product::find($ids);
        }
        $data["products"] = $products;
        //dd($data);
        return view('cart.index')->with("data",$data);
    }

    public function add(Request $request, $id){
        //$product = DB::table('products')->where('id', $id)->get()[0];  
        $products =  $request->session()->get("products");
        //$products[] = $product;
        //$products[] = DB::table('products')->where('id', $id)->get()[0];
        if($products != null && in_array($id,$products)){
            //nada
        }
        else{
            $products[] = $id;
        }
        //dd($products); 
        $request->session()->put('products', $products);
        return back();
    }


    public function delete(Request $request){
            $request->session()->forget('products');
        return back();
    }
}
