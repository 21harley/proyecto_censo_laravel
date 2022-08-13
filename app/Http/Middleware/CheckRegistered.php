<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class CheckRegistered
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
		
		$user_cedula=User::where('cedula',$request->cedula)->first();
		
		
		$user =User::where('correo',$request->correo)->first();
		
		//Verifico si existe una persona con ese correo
		if(!$user==null){
		
		
			if($user->admin==1){
				return redirect()->route('admins.index');
			}
			else{
				
				foreach($user->sintoma as $ok){
				
						
							
							return redirect()->route('users.index',compact('user'));
						
				
				}
				
					return redirect()->route('create.sintomas',compact('user'));
			}
		
		}
		elseif(!$user_cedula==null){
			$request->request->add(['id' => $user_cedula->id]);
			return $next($request);
		}
		
		else{
			return redirect()->route('welcome');
		}
		
	
		
		
       
    }
}
