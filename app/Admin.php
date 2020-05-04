<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    protected $fillable = [
        'user_id',
    ];

    public function getId(){
        return $this->attributes['id'];
    }

    public function setId($id){
        $this->attributes['id'] = $id;
    }

    public function setUser_id($user_id){
        $this->attributes['user_id'] = $user_id;
    }

    public function getUser_id(){
        return $this->hasOne('App\User','user_id');
    }
}
