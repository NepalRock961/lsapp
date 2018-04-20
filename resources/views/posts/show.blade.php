@extends('layouts.app')

@section('content')

	<a href="/lsapp/posts" class="btn btn-default">GoBack</a>
	<h1>{{$post->title}}</h1>
	
	
	<div>
		{!!$post->body!!}
	</div>
	<hr>
	<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
	<hr>
	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
			<a href="/lsapp/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

			{!!Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'POST','class' => 'pull-right'])!!}
				{{Form::hidden('_method','DELETE')}}
				{{Form::submit('Delete',['class' => 'btn btn-danger'])}}
			{!!Form::close()!!}
		@endif
	@endif

@endsection
	