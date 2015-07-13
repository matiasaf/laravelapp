@extends('app')

@section('content')

	@include('articles.barranav')


	<h1> Escribimos un nuevo artículo </h1>


	<hr/>

	
		{!! Form::open([ 'url' => 'articles'] )  !!}

		@include('articles.form', ['botonSubmit'  => 'Agregar nuevo artículo'] )

		{!! Form::close() !!}	
	
	
	
	{{-- Mostrar error de validación --}}
	
	@include('errors.listar')


@stop