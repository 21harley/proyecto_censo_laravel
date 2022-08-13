@extends('layauts.template')

@section('title','HOLAAA')

@section('content')

@include('layauts.nav_admin');

<?php $acum=0; ?>

@foreach($virus as $role1)

	@foreach($role1->user as $obj1)
		<?php $acum=1+$acum; ?>
	@endforeach
		<p>{{$role1->nombre}}:{{$acum}}</p>
		<?php $acum=0; ?>

@endforeach


@foreach($sintomas as $role)

	@foreach($role->user as $obj)
		<?php $acum=1+$acum; ?>
	@endforeach
		<p>{{$role->nombre}}:{{$acum}}</p>
		<?php $acum=0; ?>

@endforeach

	
@endsection 