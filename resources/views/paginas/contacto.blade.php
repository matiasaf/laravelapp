@extends('app')
		

@section('content')

		 <ul class="nav nav-tabs" role="tablist">
		    <li><a href="{{ url('articles') }}">Home</a></li>
		    <li><a href="{{ url('articles/create') }}">Crear un nuevo articulo</a></li>
		    <li><a href="{{ url('about') }}">Sobre mi</a></li>
		    <li class="active"><a href="{{ url('contact') }}">Contacto</a></li>
		 </ul>


		 <h1>Contactame!</h1>
@stop


