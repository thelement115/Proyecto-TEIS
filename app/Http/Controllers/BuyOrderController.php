<?php

namespace App\Http\Controllers;

use App\buyOrder;
use App\item;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BuyOrderController extends Controller
{
    public function index($id){
        $data = [];
        $data["product"] = Product::find($id);
        return view('buy.checkout')->with("data",$data);
    }

    public function save(Request $request, $product){
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
        return view('buy.succes');
    }
}
