@extends('layauts.template')

@section('title','Crear usuario')

@section('content')
	<h1 class="title">Bienvenido a la creacion</h1>
	
	<form action="{{route('users.store')}}" method="POST">
		
		@csrf
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
	</form>
@endsection 