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
	
	
	public function create_sintomas(User $user){
	
		/*	Con esto lo que haría tanto enviar enfermedades
			Como enviar también sintomas*/
		
		
			$virus=new Enfermedades();
			
			
			$sintomas=new Sintoma();
		
			
			
		
		return view('users.sintomas',compact('user','virus','sintomas'));
		
		
	}
	
	
	public function store_sintoma(Request $request,User $user){
	
	/*	
	Ejemplo si quisiera modificar un elemento de user
	$user->virus=$request->virus;
		
		$user->save();
		*/
		$ok=1;
		/*if(isset($request->COVID_19)) {
		
			$users =User::find($user->id);
			
			$users->
		
		}
		
		if(isset($request->Viruela_del_mono)) $ok=0;
		
		if(isset($request->Variente_del_COVID)) $ok=0;
		
		*/
		
		
		//Verificamos si esta definida un objeto request con esa variable
		
		if(isset($request->fiebre)){
			$user->sintoma()->attach($request->fiebre);
		}
		if(isset($request->erupciones_en_la_piel)){
			$user->sintoma()->attach($request->erupciones_en_la_piel);	
		}
		if(isset($request->tos)){
			$user->sintoma()->attach($request->tos);	
		}
		if(isset($request->dolores_musculares)){
			$user->sintoma()->attach($request->dolores_musculares);	
		}
		if(isset($request->dolor_de_cabeza)){
			$user->sintoma()->attach($request->dolor_de_cabeza);	
		}
		if(isset($request->vómito)){
			$user->sintoma()->attach($request->vómito);	
		}
		
		//Verificamos si esta definido un objeto request que tenga como variable una enfermedades
		
		if(isset($request->COVID_19)){
			$user->enfermedad()->attach($request->COVID_19);
		}
		if(isset($request->Viruela_del_mono)){
			$user->enfermedad()->attach($request->Viruela_del_mono);	
		}
		if(isset($request->Variante_del_COVID)){
			$user->enfermedad()->attach($request->Variante_del_COVID);	
		}
	
		
		
	
		
		return $request;
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
