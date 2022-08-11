@extends('layauts.template')

@section('title','Login')

@section('content')
	<h1>Bienvenido al login</h1>
	
	
	
	<form action="{{route('users.loged')}}" method="POST">
		
		@csrf
		
		

		
		
		
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
		
		
		
		<br>
		
		<button type="submit">Enviar formulario</button>
		
		
	</form>
@endsection 