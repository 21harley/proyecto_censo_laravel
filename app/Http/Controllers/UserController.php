<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Enfermedades;
use App\Models\Sintoma;
use App\Models\Notification;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index(User $user){
		
		
		$noticias=Post::all();
		
		return view('users.index',compact('noticias','user'));
	}

    public function show(Request $request){
		
		
		
		$user=User::find($request->id);
		
		
		return view('users.show',compact('user'));
	}
	
	public function create(){
	
		return view('users.create');
	}
	
	public function create_menor(){
		
		$request=session('status');
		return view('users.create_menor',compact('request'));
	}
	
	public function store_menor(Request $request){
	
		$useraux=new User();
		$useraux->nombre=$request->nombre;
		$useraux->apellido=$request->apellido;
		$useraux->clave=$request->clave;
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
		$user->nombre= "N/D";
		$user->apellido="N/D";
		$user->clave=$request->clave;
		$user->cedula=$request->cedula;
		$user->correo=$request->correo;
		$user->dire_municipio="N/D";
		$user->dire_localidad="N/D";
		$user->tele_fijo="N/D";
		$user->tele_movil="N/D";
		$user->admin="0";
	
		
	
		
		
		$user->save();
		
		return view('welcome');
	}
	
	public function login(){
	
		return view('users.login');
	}		
	
	public function search(){
			
		return view('users.search');
		
	}	
	
	
	public function loged(Request $request){
		
		$user =User::where('correo',$request->correo)->first();
		
		
			return redirect()->route('create.sintomas',compact('user'));	

		
	}
}
