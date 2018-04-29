@extends('layouts.app')

@section('content')
<div class ="container">
        <div class="jumbotron">
            <h2>Administrator</h2>
            
            <form action = "{{ route('posts.store') }}" method = "POST" class = "form">
                <div class="row">
                    <div class="form-group col-xs-5 col-sm-8">
                        <label>Title</label>
                        <input type = "text" class = "form-control" name = "title">
                    </div>
                </div>
                      
                <div class="row">
                    <div class="form-group col-xs-6 col-sm-10">
                        <label>Article</label>
                        <textarea type = "text" class = "form-control"  name = "article-ckeditor" ></textarea>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                <input type="hidden" name="_method" value="POST">
                <button type="submit" class="btn btn-primary btn-lg">Publish</button>
                
            </form>
                            
        </div>
    </div>

    

@endsection