<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index(){
		return view('welcome');
	}

    public function show(User $user){
	
		
		return view('users.show',compact('user'));
	}
	
	public function create(){
	
		return view('users.create');
	}
	
	
	public function create_sintomas(User $user){
	
		
		return view('users.sintomas',compact('user'));
	}
	
	
	public function store_sintoma(Request $request,User $user){
	
		$user->virus=$request->virus;
		
		$user->save();
		
		return view('welcome');
	}
	
	public function store(request $request){
		
		$user=new User();
		$user->nombre= $request->nombre;
		$user->apellido=$request->apellido;
		$user->clave=$request->clave;
		$user->re_clave=$request->re_clave;
		$user->cedula=$request->cedula;
		$user->correo=$request->correo;
		$user->dire_municipio=$request->dire_municipio;
		$user->dire_localidad=$request->dire_localidad;
		$user->tele_fijo=$request->tele_fijo;
		$user->tele_movil=$request->tele_movil;
		$user->create_user=$request->create_user;
		$user->url_img=$request->url_img;
		
	
		
		
		$user->save();
		
		return view('welcome');
	}
	
	
}
