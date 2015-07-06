@extends('app')

@section('content')

	
 	
 	 @include('articles.barranav')


	



	{!! Form::model($article, [ 'method' => 'PATCH' ,  'action' => ['ArticlesController@update' , $article->id ] ])  !!}
		
	@include('articles.form', ['botonSubmit'  => 'Realizar cambios'] )
	
	{!! Form::close() !!}	
	
	
	
	{{-- Mostrar errores de validación --}}
	
	@include('errors.listar')



@stop