@extends('layauts.template')

@section('title','Crear usuario')

@section('content')
	<h1>Bienvenido a la creaciooooooooooooon</h1>
	
	
	
	
	<form action="{{route('users.sintomas',$curso)}}" method="post">
		
		@csrf
		
		@method('put')
		
		
		
		<input type="hidden" name="id" value="{{$user->id}}">
				
		<label>
			Virus 
			<br>
			<input type="text" name="virus">
			<br>
		</label>
		
		<label>
			Síntoma:
			<br>			
			<input  type="text" name="sintoma" >
			<br>
		</label>
		
		<label>
			Añadir un síntoma: 
			<br>
			<input type="text" name="nuevo_sintoma">
			|<br>
		</label>
		
				
		<br>
		
		<button type="submit">Enviar formulario</button>
		
		
	</form>
@endsection 