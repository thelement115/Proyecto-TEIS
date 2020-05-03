<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyOrderController extends Controller
{
    public function index(){
        return view('buy.checkout');
    }
}
