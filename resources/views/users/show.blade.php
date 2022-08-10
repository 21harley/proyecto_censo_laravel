@extends('layauts.template')

@section('title','Curso' . " " . $user->nombre)

@section('content')
	<h1>Bienvenido al curso {{$user->nombre}}</h1>
	<br>
	<a href="">Editar curso</a>
	<p><strong>Categoria: 
	</strong>{{$user->nombre}}</p>
@endsection 