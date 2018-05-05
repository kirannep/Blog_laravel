@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
<<<<<<< HEAD
=======
                    <br><br>
                    
                    
                    @if(count($post)>0)
								
									<table class = "table table-striped">
                                        <tr>
                                            <th>Title</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        @foreach($post as $article)
										<tr>
											<td>{{$article->title}}</td>
                                        <td><a href="/posts/{{$article->id}}/edit" class="btn btn-primary">Edit</a></td>
                                            <td>
                                                <form action = "{{route('posts.destroy',$article->id)}}" method ='POST' class = "pull-right">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="_method" value="DELETE">                                                     
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </table>
					@endif
                    
>>>>>>> main
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
