@extends('layauts.template')

@section('title','Crear usuario')

@section('content')
	<h1>Bienvenido a la creacion</h1>
	
	
	
	<form action="{{route('menor.store')}}" method="POST">
		
		@csrf
		
		
	<?php /*	<label>
			Nombre: 
			<br>
			<input type="text" name="nombre">
			<br>
		</label>
		
		<label>
			Apellido:
			<br>			
			<input  type="text" name="apellido" >
			<br>
		</label>
	*/?>
		
				
			<input  type="hidden" name="correo" value="{{$request->correo}}">
			<input  type="hidden" name="clave" value="{{$request->clave}}">
			<input type="hidden" name="re_clave" value="{{$request->re_clave}}">
			<input  type="hidden" name="cedula" value="{{$request->cedula}}">
		
		
		
		
		<label>
			Nombre:
			<br>			
			<input  type="text" name="nombre" >
			<br>
		</label>
		
		<label>
			Apellido: 
			<br>
			<input type="text" name="apellido">
			|<br>
		</label>
		
				
		<label>
			dire_municipio: 
			<br>
			<input type="text" name="dire_municipio">
			<br>
		</label>
		
		<label>
			dire_localidad
			<br>			
			<input  type="text" name="dire_localidad" >
			<br>
		</label><
		
		<label>
			tele_fijo: 
			<br>
			<input type="text" name="tele_fijo">
			<br>
		</label>
		
		<label>
			tele_movil: 
			<br>
			<input type="text" name="tele_movil">
			<br>
		</label>
		
		
	
		
	
		
		
		
		
		<br>
		
		<button type="submit">Enviar formulario</button>
		
		
	</form>
@endsection 