@extends('layauts.template')

@section('title','Curso' . " " . $user->nombre)

@section('content')


	<h1>Bienvenido al curso {{$user->nombre}}</h1>
	<br>
	
	Usted posee el virus:
	
	
	
	@foreach($user->enfermedad as $role)
		<ul>
		<li>{{$role->nombre}}</li>
		</ul>
	@endforeach
	
	<br>
	<br>
	
	Usted ha presentado los siguientes sintomas:
	
	<br>
	
	@foreach($user->sintoma as $role)
		<ul>
		<li>{{$role->nombre}}</li>
		</ul>
	@endforeach
	
	<a href="">Editar curso</a>
	<p><strong>Categoria: 
	</strong>{{$user->nombre}}</p>
@endsection 