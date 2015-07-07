@extends('app')


@section('content')


	 @include('articles.barranav')




 <h1>Articulos nuevos: </h1> 

	@foreach($articles as $article)
		
	
	
		<article>
			
			<h2>

			{{-- Titulo --}}
			<a href=" {{ url('/articles', $article->id ) }} "> {{ $article->title }} </a> 
			{{-- Boton editar --}}
			<a href="{{ $url = action('ArticlesController@edit', $article->id)  }}" class="btn btn-warning" role="button">Editar</a>
			<a href="{{ $url = action('ArticlesController@eliminar', $article->id)  }}" class="btn btn-warning" role="button">Eliminar</a>
		
			</h2>
			
			
			<div class="body"> {{ $article->body}} </div>

			
			<small>{!! Form::label('tiempohace', $article->published_at->diffForHumans() ) !!}</small>
			

		</article>


	@endforeach

@stop