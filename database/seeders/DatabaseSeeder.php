<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Sintoma;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
		$sintoma=new Sintoma();
		$sintoma->nombre="fiebre";
		$sintoma->descripcion="";
		
		$sintoma->save();
		
		$sintoma=new Sintoma();
		$sintoma->nombre="erupciones en la piel";
		$sintoma->descripcion="";
		$sintoma->save();
		
		$sintoma=new Sintoma();
		$sintoma->nombre="tos";
		$sintoma->descripcion="";
		$sintoma->save();
		
		$sintoma=new Sintoma();
		$sintoma->nombre="dolores musculares";
		$sintoma->descripcion="";
		$sintoma->save();
		
		$sintoma=new Sintoma();
		$sintoma->nombre="dolor de cabeza";
		$sintoma->descripcion="";
		$sintoma->save();
		
		$sintoma=new Sintoma();
		$sintoma->nombre="vómito";
		$sintoma->descripcion="";
		$sintoma->save();
		
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
