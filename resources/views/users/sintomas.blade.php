@extends('layauts.template')

@section('title','Crear usuario')

@section('content')
	<h1>Bienvenido a la creacioooooooooooooooon</h1>
	
	
		
	<form action="{{route('users.sintomas',$user)}}" method="post">
		
	
		@csrf
		
		@method('put')
		
		
<?php //Ciclos con blade ?>
		
		Seleccione el virus que presenta:
		
		@foreach ($virus->all() as $obj)
			
			<br>
		
			{{$obj->nombre;}}<input type="checkbox" name="{{$obj->nombre;}}" value="{{$obj->id}}" id="">
		
		@endforeach
		
		
		<br>
		<br>
		Selecciona los síntomas que presenta:
		<br>
		
		@foreach ($sintomas->all() as $obj)
			
			<br>
		
			{{$obj->nombre;}}<input type="checkbox" name="{{$obj->nombre;}}" value="{{$obj->id}}" id="">
		
		@endforeach
		
		
		<br>
		<br>
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