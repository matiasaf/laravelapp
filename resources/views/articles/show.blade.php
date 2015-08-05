@extends('app')



@section('content')

	@include('articles.barranav')
	
	<article>
 	
 	<h2> {{$articles->title}} </h1>
	
	<div class="body"> {{$articles->body}} </div>
	</article>

	@unless($articles->tags->isEmpty())

	<h5>Tags:</h5>

	<ul>
		@foreach($articles->tags as $tag)
		<li> {{ $tag->name }} </li>
		@endforeach
	</ul>

	@endunless


@stop