<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use App\readerComment;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $show = Post::all();
       return view('pages.blog')->with('post',$show);
    }

    public function __construct()
    {
        $this->middleware('auth',['only'=>['create','edit']]);
    }

    public function index()
    {
        //$show = Post::all();
        $show = Post::orderBy('id','desc')->paginate(1);
        return view('pages/blog')->with('post',$show);
       //return view('pages.blog',compact('posts'));
    }

     /** 
    public function comment()
    {
        $s = readerComment::all();
        return view('pages/blog')->with('commentShow',$s);
    }



    /** 
    public function dashboard(){
        $dboard = Post::all();
        return view('/dashboard')->with('post',$dboard);
    }
    */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //

        $this->validate($request,[
            'title'=>'required',
            'article-ckeditor'=>'required',
        ]);

        $p = new Post;
        $p->title = $request->input('title');
        $p->article = $request->input('article-ckeditor');
        $p->user_id = auth()->user()->id;
        $p->save();
        return redirect('/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return Post::find($id);

        //return Post::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //

        $edit = Post::find($id);
        return view('posts.edit')->with('editting', $edit);
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //

        $this->validate($request,[
            'title'=>'required',
            'article-ckeditor'=>'required',
        ]);
        $a = Post::find($id);
        $a->title = $request->input('title');
        $a->article = $request->input('article-ckeditor');
        $a->save();
        return redirect('/posts');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //
       $delete = Post::find($id);
        $delete->delete();
        return redirect('/dashboard');

    }
}
