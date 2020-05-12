<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\item;
use App\buyOrder;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request){
        $data = []; 
        $data["title"] = Lang::get('messages.index');
        $products=null;
        $ids = $request->session()->get("products");
        if($ids != null){
            $products = Product::find($ids);
        }
        $data["products"] = $products;
        return view('cart.index')->with("data",$data);
    }

    public function add(Request $request, $id){
        
        $products =  $request->session()->get("products");
        if($products != null && in_array($id,$products)){
            //nada
        }
        else{
            $products[] = $id;
        }
        $request->session()->put('products', $products);
        return back();
    }

    public function buy(Request $request){
        $product = $request->session()->get("products");
        foreach($product as $product){
            $id = Auth::id();
            $buyorder = new buyOrder;
            $buyorder->setDate();
            $payment =$request->only(["Method"]);
            $buyorder->setPaymentForm($payment["Method"]);
            $buyorder->setUser_id($id);
            $buyorder->save();
            $idOrder = $buyorder->getId();
            $item = new item;
            $item->setProduct_id($product);
            $item->setBuyOrder_id($idOrder);
            $quantity = $request->only(["quantity"]);
            $item->setQuantity($quantity["quantity"]);
            $item->save();
        }
        $request->session()->forget('products');
        return view('buy.succes');
    }


    public function delete(Request $request){
            $request->session()->forget('products');
        return back();
    }
}
