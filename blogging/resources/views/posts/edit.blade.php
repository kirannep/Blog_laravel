@extends('layouts.app')

@section('content')
<div class ="container">
        <div class="jumbotron">
            <h2>Administrator</h2>
            <br><br>
            <h3>Edit Post</h3>
            
            <form action = "{{ route('posts.update',$editting->id) }}" method = "POST" class = "form">
                <div class="row">
                    <div class="form-group col-xs-5 col-sm-8">
                        <label>Title</label>
                    <input type = "text" class = "form-control" name = "title" value = "{{$editting->title}}">
                    </div>
                </div>
                      
                <div class="row">
                    <div class="form-group col-xs-6 col-sm-10">
                        <label>Article</label>
                    <textarea type = "text" class = "form-control"  name = "article-ckeditor" >{{$editting->article}}</textarea>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                <input type="hidden" name="_method" value="PUT">
                <button type="submit" class="btn btn-primary btn-lg">Publish</button>
                
            </form>
                            
        </div>
    </div>

    

@endsection