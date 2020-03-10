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

    private static function verify($user){
        if($user == null){
            return False;
        }else{
            $id = $user->getAuthIdentifier();
            $admin = Admin::where('user_id',$id)->get();
            if($admin->isEmpty()){
                return False;
            }else{
                return True;
            }
        }
    }

    public function panel(){
        $user = Auth::user();
        if(AdminController::verify($user)){
            return view('admin.adminPanel');
        }else{
            return redirect()->route('product.index');
        }
    }

    public function createAdmin(){
        $user = Auth::user();
        if(AdminController::verify($user)){
            return view('admin.adminCreate');
        }else{
            return redirect()->route('product.index');
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

    public function modifyUser(){
        $user = Auth::user();
        if(AdminController::verify($user)){
            $data = [];
            $data['users'] = User::all();
            return view('admin.modifyUser')->with('data',$data);
        }else{
            return redirect()->route('product.index');
        }
    }

    public function BanUser($id){
        $user = User::find($id);
        $user->banned= true;
        $user->save();
        return back()->with('created','Usuario baneado satifactoriamente!');;
    }

}
