<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Enfermedades;
use App\Models\Sintoma;
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
	
	public function create_menor(Request $request){
		
	
		return view('welcome');
	}
	
	
	
	public function store(request $request){
		
		$user=new User();
		$user->nombre= " ";
		$user->apellido=" ";
		$user->clave=$request->clave;
		$user->re_clave=$request->re_clave;
		$user->cedula=$request->cedula;
		$user->correo=$request->correo;
		$user->dire_municipio=" ";
		$user->dire_localidad=" ";
		$user->tele_fijo=" ";
		$user->tele_movil=" ";
		$user->admin="0";
	
		
	
		
		
		$user->save();
		
		return view('welcome');
	}
	
	public function store_menor(request $request){
	
		$user=new User();
		$user->nombre= " ";
		$user->apellido=" ";
		$user->clave=$request->clave;
		$user->re_clave=$request->re_clave;
		$user->cedula=$request->cedula;
		$user->correo=$request->correo;
		$user->dire_municipio=" ";
		$user->dire_localidad=" ";
		$user->tele_fijo=" ";
		$user->tele_movil=" ";
		$user->admin="0";
	
		
	
		
		
		$user->save();
	
		return view('welcome');
	}
	
}
