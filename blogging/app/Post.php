<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use App\readerComment;
>>>>>>> main

class Post extends Model
{
    public $table = 'posts';
    public $primarKey = 'id';
    public $timestamps = true;
<<<<<<< HEAD
=======

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments(){
        return $this->hasMany('App\readerComment');
    }
>>>>>>> main
}
