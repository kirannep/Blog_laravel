<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class readerComment extends Model
{
    public $table = 'reader_comments';
    public $primarKey = 'id';
    public $timestamps = true;

    public function post(){
        return $this->belongsTo('App\Post');
    }
}
