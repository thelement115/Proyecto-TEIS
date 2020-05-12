<?php

namespace App\Http\Controllers;

use App\buyOrder;
use Illuminate\Http\Request;
use App\Item;
use App\Product;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function sells(){
        $data = [];
        $data["items"] = Item::orderBy('created_at','DESC')->get();
        $users = [];
        foreach ($data["items"] as $item){
            array_push($users, $item->buyOrder()->get()[0]->User()->get()[0]); // obtengo el buyorder del item y con el buy order obtengo el usuario
        }
        $data["users"] = $users;
        return view('buy.sells')->with('data',$data);
    }

    public function orders(){
        $id = Auth::id();
        $buyOrders = buyOrder::where('user_id',$id)->get();
        $items = [];
        foreach ($buyOrders as $order){
            array_push($items, $order->item()->get()[0]);
        }
        $data["items"] = $items;
        return view('buy.orders')->with('data',$data);
    }
}
