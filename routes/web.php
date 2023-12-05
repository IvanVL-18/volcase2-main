<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
//faltan las rutas de trabajo y registros y de usuarios
//también de las que redirecciona si eres admin
use App\Http\Controllers\TrabajoController;
use App\Http\Controllers\mostrarTrabajadoresController;
use App\Http\Controllers\TrabajosController;

Route::get('/administrador', [mostrarTrabajadoresController::class, 'index']);//según ya


Route::put('/admin/update/{id}',[AdminController::class,'update'] )->name('admin.update');

Route::get('/admin/edit/{id}',[AdminController::class,'edit'])->name('admin.edit');

Route::resource('/admin',AdminController::class);

//se buguea
//Route::get('/trabajador', [mostrarTrabajosController::class, 'index']);//no mover ya muestra los trabajos

Route::resource('trabajador',TrabajosController::class);//no le muevas nada we
//no borrar// este me muestra el registro específico
Route::get('/trabajador/{id}', [TrabajadorController::class, 'show'])->name('trabajador.show');



Route::resource('trabajo',TrabajoController::class);//ya

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
