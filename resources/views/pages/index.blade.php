@extends('layouts.app')

@section('content')
	<div class="jumbotron text-center">
		<h1>{{$title}}</h1>
		<p>This is the second laravel project  that i am going to do ..This include the basic code and this is just uses for the testing.</p>
		<p><a class="btn btn-primary btn-lg" href="/lsapp/login" role="button">Login</a>
		<a class="btn btn-success btn-lg" href="/lsapp/register">Register</a>
		</p>
	</div>
@endsection