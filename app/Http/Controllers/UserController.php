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
		
		
		
		
		
		return view('users.create_menor',compact('request'));
	}
	
	public function store_menor(Request $request){
	
		$useraux=new User();
		$useraux->nombre=$request->nombre;
		$useraux->apellido=$request->apellido;
		$useraux->clave=$request->clave;
		$useraux->re_clave=$request->re_clave;
		$useraux->cedula=$request->cedula;
		$useraux->correo=$request->correo;
		$useraux->dire_municipio=$request->dire_municipio;
		$useraux->dire_localidad=$request->dire_localidad;
		$useraux->tele_fijo=$request->tele_fijo;
		$useraux->tele_movil=$request->tele_movil;
		$useraux->admin="0";
	
		$useraux->save();
		
		return view('welcome');
	
		
		
	}
	
	
	public function store(Request $request){
		
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
