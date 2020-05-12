<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public static $createRules = [
        'name' => 'required',
        'username' => 'required',
        'password' => 'required',
      ];
  
      public static $updateRules = [
        'name' => 'required',
        'username' => 'required',
        'password' => 'required',
      ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','banned','department','city','address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function getDepartment(){
        return $this->attributes['department'];
    }

    public function setDepartment($department){
        $this->attributes['department'] = $department;
    }

    public function getCity(){
        return $this->attributes['city'];
    }

    public function setCity($city){
        $this->attributes['city'] = $city;
    }

    public function getAddress(){
        return $this->attributes['address'];
    }

    public function setAddress($address){
        $this->attributes['address'] = $address;
    }

    public function getId(){
        return $this->attributes['id'];
    }

    public function setId($id){
        $this->attributes['id'] = $id;
    }

    public function getName(){
        return $this->attributes['name'];
    }

    public function setName($name){
        $this->attributes['name'] = $name;
    }

    public function getEmail(){
        return $this->attributes['email'];
    }

    public function setEmail($email){
        $this->attributes['email'] = $email;
    }

    public function getPassword(){
        return $this->attributes['password'];
    }

    public function setPassword($password){
        $this->attributes['password'] = $password;
    }

    public function getBanned(){
        return $this->attributes['banned'];
    }

    public function setBanned($banned){
        $this->attributes['banned'] = $banned;
    }

    public function Comments(){
        return $this->hasMany('App\Comment');
    }

    public function admin(){
        return $this->belongsTo('App\Admin');
    }

    public function buyorder(){
        return $this->belongsTo('App\Admin');
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
