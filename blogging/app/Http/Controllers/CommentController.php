<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\readerComment;

class CommentController extends Controller
{
    
    
    public function store(Request $request,Post $post){
        $this->validate($request,[
            'name'=>'required|min:3',
            'comment'=>'required|min:10',
            'email'=>'required',
            ]);
                
        $c = new readerComment;
        $c->comment = $request->input('comment');
        $c->name = $request->input('name');
        $c->email = $request->input('email');
        $c->post_id = $post->id;
        $c->save();
        return back();
    }
}
