<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ServiceController extends Controller
{
    public function service(){
        $client = new Client();
        $res = $client->get('http://ec2-52-91-77-71.compute-1.amazonaws.com/api/topanimals');
        $aux = $res->getBody();
        $aux = json_decode($aux);
        $aux = $aux->data;
        $data = [];
        $data["res"] = $aux;
        return view("ally.index")->with("data",$data);
    }

    public function serviceThird(){
        $client = new Client();
        $second = $client->get('https://www.datos.gov.co/resource/xdk5-pm3f.json?$select=departamento');
        $departments = $second->getBody();
        echo $departments;
        $data = [];
        $aux = [];
    }
}
