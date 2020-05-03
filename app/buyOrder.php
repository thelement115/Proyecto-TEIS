<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buyOrder extends Model
{
    protected $fillable=[
        'paymentForm','user_id','date'
    ];

    public function getId(){
        return $this->attributes['id'];
    }

    public function setId($id){
        $this->attributes['id'] = $id;
    }

    public function getDate(){
        return $this->attributes['date'];
    }

    public function setDate($date){
        $this->attributes['date'] = $date;
    }

    public function getPaymentForm(){
        return $this->attributes['paymentForm'];
    }

    public function setPaymentForm($paymentForm){
        $this->attributes['paymentForm'] = $paymentForm;
    }

    public function setUser_id($user_id){
        $this->attributes['user_id'] = $user_id;
    }

    public function getUser_id(){
        return $this->hasOne('App\User','user_id');
    }
}
