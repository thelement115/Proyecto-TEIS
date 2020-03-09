<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable =['username','comment'];
    public $timestamps = false;

    public function getUsername()
    {
        return $this->attributes['username'];
    }

    public function setUsername()
    {
      $this->attributes['username'] = $username;
    }

    public function getComment(){
        return $this->attributes['comment'];
    }

    public function setComment(){
      $this->attributes['comment'] = $comment;
    }

    public function getId(){
      return $this->attributes['id'];
    }

    public function setId($id)
    {
      $this->attributes['id'] = $id;
    }
}
