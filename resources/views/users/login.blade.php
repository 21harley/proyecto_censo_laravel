@extends('layauts.template')

@section('title','Login')

@section('content')
<div class="container__grid">
	<h1 class="title">Iniciar sesión</h1>
	
	
	
	<form action="{{route('users.loged')}}" method="POST">
		
		@csrf
		
		

		<div class="form-create" >
		
			<div>
				<label>Correo*: </label><input type="text" name="correo" required>
			</div>
			<div>
				<label>Clave*:	</label><input  type="text" name="clave" required>
			</div>
			
			
			</div>
			
			<div class="pos-button">
			<button type="submit" class="buttom-submit">Enviar</button>
		</div>

	</form>
	<div>
		<a class="buttom-submit button-link" href="{{route('users.login')}}">Iniciar sesión</a>
		<a class=" buttom-submit button-link" href="{{route('users.create')}}">Registro</a>
	</div>
</div>
@endsection 