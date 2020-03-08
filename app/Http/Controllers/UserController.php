<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Lang;

class UserController extends Controller{

    public function show(){
        $data = []; //to be sent to the view
        $data["title"] = Lang::get('messages.register');
        return view('user.register')->with("data",$data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "username" => "required",
            "password" => "required"
        ]);
        User::create($request->only(["name","username","password"]));
        return back()->with('success','User created successfully!');
    }

    public function destroy($id){
        User::find($id)->delete();
        return UserController::show();
    }

}

