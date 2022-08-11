@extends('layauts.template')

@section('title','Crear usuario')

@section('content')
	<h1>Bienvenido a la creacion</h1>
	
	
	
	<form action="" method="POST">
		
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
		
		<label>
			Correo:
			<br>			
			<input  type="text" name="correo" >
			<br>
		</label>
		
		<label>
			Clave: 
			<br>
			<input type="text" name="clave">
			|<br>
		</label>
		
		<label>
			Confirma la clave: 
			<br>
			<input type="text" name="re_clave">
			<br>
		</label>
		
		<label>
			Cedula:
			<br>			
			<input  type="text" name="cedula" >
			<br>
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
			|<br>
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