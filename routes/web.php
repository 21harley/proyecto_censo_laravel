<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NewsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
//****USERS***********

//Para mostrar
Route::get('users/create', [UserController::class,'create' ])->name('users.create');
Route::get('users/{user}/create_sintomas', [UserController::class,'create_sintomas' ])->name('users.sintomas');
Route::get('users/{user}', [UserController::class,'show' ])->name('users.show');

//Para modificar
Route::put('users/{user}',[UserController::class,'store_sintoma'])->name('users.sintomas');

//Para ingresar
Route::post('users', [UserController::class,'store'])->name('users.store');

//*******Publicacion***********

Route::get('publication/create', [PostController::class,'create' ])->name('post.create');

//Ojo con el return de los stores se utiliza tambien redirect que es un metodo
Route::post('publication', [PostController::class,'store'])->name('post.store');

//*******Notificacion***********

Route::get('notificacion/create', [NewsController::class,'create' ])->name('notificacion.create');

//Ojo con el return de los stores se utiliza tambien redirect que es un metodo
Route::post('notificacion', [NewsController::class,'store'])->name('notificacion.store');
