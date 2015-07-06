@extends('app')



@section('content')

	@include('articles.barranav')
	
	<article>
 	
 	<h2> {{$articles->title}} </h1>
	
	<div class="body"> {{$articles->body}} </div>
	
	</article>

@stop