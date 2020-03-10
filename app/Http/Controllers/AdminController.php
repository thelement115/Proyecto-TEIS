<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Lang;
use App\Admin;

class AdminController extends Controller
{
    public function panel(){
        $user = Auth::user();
        if($user == null){
            return redirect()->route('home');
        }else{
            $id = $user->getAuthIdentifier();
            $admin = Admin::where('user_id',$id)->get();
            if($admin->isEmpty()){
                return redirect()->route('home');
            }
            return view('admin.adminPanel');
        }
    }

    public function createAdmin(){
        $user = Auth::user();
        if($user == null){
            return redirect()->route('home');
        }else{
            $id = $user->getAuthIdentifier();
            $admin = Admin::where('user_id',$id)->get();
            if($admin->isEmpty()){
                return redirect()->route('home');
            }
            return view('admin.adminCreate');
        }
    }

    public function save(Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required"
        ]);
        $user = User::create($request->only(["name","email","password"]));
        $admin = new Admin;
        $admin->setUser_id($user->getId());
        $admin->save();
        $data = [];
        $data['message'] = Lang::get('messages.succesRegister');
        return view('admin.adminCreate')->with("data",$data);
    }
}
