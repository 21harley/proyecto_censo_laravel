<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/index.css">
        <title>Laravel</title>


    </head>
    <body class="antialiased">
        
		<a href="{{route('users.login')}}">Iniciar sesión</a>
		<a href="{{route('users.create')}}">Registro</a>
		
    </body>
</html>
