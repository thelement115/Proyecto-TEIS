<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Product;

class ItemController extends Controller
{
    public function sells(){
        $data = [];
        $data["items"] = Item::orderBy('created_at','DESC')->get();
        return view('buy.sells')->with('data',$data);
    }
}
