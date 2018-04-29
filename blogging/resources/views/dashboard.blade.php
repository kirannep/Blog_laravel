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
                                            <td><a href="#" class="btn btn-primary">Delete</a></td>
                                        </tr>
                                        @endforeach

                                    </table>
					@endif
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
