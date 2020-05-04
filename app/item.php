<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $fillable=[
        'quantity','buyOrder_id','product_id'
    ];

    public function getId(){
        return $this->attributes['id'];
    }

    public function setId($id){
        $this->attributes['id'] = $id;
    }

    public function getQuantity(){
        return $this->attributes['quantity'];
    }

    public function setQuantity($quantity){
        $this->attributes['quantity'] = $quantity;
    }

    public function getBuyOrder_id(){
        return $this->hasOne('App\buyOrder','buyOrder_id');
    }

    public function setBuyOrder_id($buyOrder_id){
        $this->attributes['buyOrder_id'] = $buyOrder_id;
    }

    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function setProduct_id($product_id){
        $this->attributes['product_id'] = $product_id;
    }
}
