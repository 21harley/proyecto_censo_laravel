<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\SintomaController;
use App\Http\Controllers\AdminController;
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
})->name('welcome');

//*****ADMINS**********

Route::get('admin/index', [AdminController::class,'index'])->name('admins.index');



Route::get('/home', function () {
    return view('home');
});
//****USERS***********

//Para mostrar
Route::get('users/create', [UserController::class,'create' ])->name('users.create');

Route::post('admin/search', [UserController::class,'show' ])->name('users.show')->middleware('registered');

Route::get('users/create/menor_de_edad', [UserController::class,'create_menor'])->name('users.menor.create');

Route::get('index/{user}', [UserController::class,'index'])->name('users.index');

Route::get('admin/search', [UserController::class,'search' ])->name('users.search');

//Para ingresar

Route::post('user', [UserController::class,'store_menor'])->name('menor.store');

Route::post('users', [UserController::class,'store'])->name('users.store')->middleware('age');


//********Sintomas y enfermedades *************


Route::get('users/{user}/create_sintomas', [SintomaController::class,'create_sintomas' ])->name('create.sintomas');
Route::put('users/{user}',[SintomaController::class,'store_sintoma'])->name('users.sintomas');

//*******Publicacion***********

Route::get('publication/create', [PostController::class,'create' ])->name('post.create');

//Ojo con el return de los stores se utiliza tambien redirect que es un metodo
Route::post('publication', [PostController::class,'store'])->name('post.store');

//*******Notificacion***********

Route::get('notificacion/create', [NotificacionController::class,'create' ])->name('notification.create');

//Ojo con el return de los stores se utiliza tambien redirect que es un metodo
Route::post('notificacion', [NotificacionController::class,'store'])->name('notificacion.store')->middleware('registered');


//***Prueba




//**

Route::get('login', [UserController::class,'login'])->name('users.login');

Route::post('login', [UserController::class,'loged'])->name('users.loged')->middleware('registered');


