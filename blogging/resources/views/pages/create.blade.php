@extends('layouts.app')

@section('content')
<div class ="container">
        <div class="jumbotron">
            <h2>Administrator</h2>
            
            <form action = "posting.php" method = "post" class = "form">
                <div class="row">
                    <div class="form-group col-xs-5 col-sm-8">
                        <label>Title</label>
                        <input type = "text" class = "form-control" name = "title"></textarea>
                    </div>
                </div>
                      
                <div class="row">
                    <div class="form-group col-xs-6 col-sm-10">
                        <label>Article</label>
                        <textarea type = "text" class = "form-control" id="article-ckeditor" name = "article" rows="10" cols="50"></textarea>
                    </div>
                </div>
                  
                <button type="submit" class="btn btn-primary btn-lg">Publish</button>
                
            </form>
                            
        </div>
    </div>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>

@endsection