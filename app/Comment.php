<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public static $createRules = [
      'text' => 'required',
  ];
  
  public static $updateRules = [
      'text' => 'required',
  ];

    protected $fillable =['text'];
    public $timestamps = false;

    public function getText(){
        return $this->attributes['text'];
    }

    public function setText($text){
      $this->attributes['text'] = $text;
    }

    public function getId(){
      return $this->attributes['id'];
    }

    public function setId($id){
      $this->attributes['id'] = $id;
    }

    public function setProductId($id){
      $this->attributes['id'] = $id;
    }

    public function getProductId(){
      return $this->attributes['id'];
    }

    public function User(){
      return $this->belongsTo(User::class);
    }
    
    public function Product(){
      return $this->hasOne(Product::class);
    }

}
