@extends('layauts.template')

@section('title','Index')

@section('content')

	<a href="{{route('welcome')}}">Cerrar sesión</a>

	<div>Notificaciones:</div>
	<br>
	@foreach($user->notification as $notificacion)
		<div>{{$notificacion->mensaje}}</div>
		<br>
	@endforeach
	<div>Noticias:</div>
	<br>
	@foreach($noticias as $noticia)

	
		<p>{{$noticia->title}}</p>
		<br>
		<p>{{$noticia->mensaje}}</p>
		

@endforeach

	
	
@endsection 