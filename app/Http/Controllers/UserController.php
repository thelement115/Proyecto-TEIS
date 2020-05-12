<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use GuzzleHttp\Client;

class UserController extends Controller{

    public function show(){
        $data = [];
        return view('user.register')->with("data");
    }

    public function direction(){
        $id = Auth::id();
        $user = User::find($id);
        $data["user"] = $user;
        $client = new Client();
        $second = $client->get('https://www.datos.gov.co/resource/xdk5-pm3f.json?$select=departamento');
        $departments = $second->getBody();
        $departments = json_decode($departments);
        $aux = [];
        foreach($departments as $department){
            $departmentaux = $department->departamento;
            if(!in_array($departmentaux,$aux)){
                array_push($aux,$departmentaux);
            }
        }
        $data["deparments"] = $aux;
        $third = $client->get('https://www.datos.gov.co/resource/xdk5-pm3f.json?$select=municipio');
        $cities = $third->getBody();
        $cities = json_decode($cities);
        $aux2 = [];
        foreach($cities as $city){
            $cityaux = $city->municipio;
            if(!in_array($cityaux,$aux2)){
                array_push($aux2,$cityaux);
            }
        }
        $data["cities"] = $aux2;
        return view('home.direction')->with("data",$data);
    }

    public function changeDirection(Request $request){
        $id = Auth::id();
        $user = User::find($id);
        $user->setDepartment($request->deparment);
        $user->setCity($request->city);
        $user->setAddress($request->address);
        $user->save();
        return back();
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

}

