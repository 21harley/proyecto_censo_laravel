@extends('layauts.template')

@section('title','Crear usuario')

@section('content')
	<h1 class="title">Bienvenido a la creacion</h1>
	
	<form action="{{route('users.store')}}" method="POST">
		
		@csrf
<<<<<<< HEAD
		
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
		¿Eres menor de edad?
			<br>			
			<input type="checkbox" name="age" value="18" id="">
			<br>
		</label>
	
		
	
		
		
		
		
		<br>
		
		<button type="submit">Enviar formulario</button>
		
		
=======
		<div class="form-create" >
			<div>
				<label>Nombre*:</label><input type="text" name="nombre" required>
			</div>
			<div>
				<label>Apellido*:</label><input  type="text" name="apellido" required>
			</div>
			<div>
				<label>Clave*: </label><input type="text" name="clave" required>
			</div>
			<div>
				<label>Repetir clave*: </label> <input type="text" name="re_clave" required>
			</div>
			<div>
				<label>Cedula*:	</label><input  type="text" name="cedula" required>
			</div>
			<div>
				<label>Correo*:</label><input  type="text" name="correo" required>
			</div>
			<div>
				<label>dire_municipio*: </label><input type="text" name="dire_municipio" required>
			</div>
			<div>
				<label>dire_localidad*:</label><input  type="text" name="dire_localidad" required>
			</div>
			<div>
				<label>tele_fijo*: </label><input type="text" name="tele_fijo" required>
			</div>
			<div>
				<label>tele_movil*: </label><input type="text" name="tele_movil" required>
			</div>
			<div>
				<label>create_user</label><input  type="text" name="create_user" >
			</div>
		</div>
		<div class="pos-button">
			<button type="submit" class="buttom-submit">Enviar formulario</button>
		</div>
>>>>>>> 732b282fe744c5e11713cd35efd692c191a963f1
	</form>
@endsection 