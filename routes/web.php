<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\SessionsController;
use App\Http\controllers\DashboardController;
use App\Http\controllers\UsuarioController;


/*Ruta de Login */

Route::get('/', function ()
 {return view('Home');});

Route::get('/login', [SessionsController::class, 
'create'])->name('login.index');

Route::post('/dashboard', [DashboardController::class, 
'create'])->name('dashboard.index');
 
//rutas usuario
route::get('/usuarios', [UsuarioController::Class,'index'])->name('usuarios.index');
route::get('/usuarios/crear', [UsuarioController::Class,'create'])->name('usuarios.create');
route::get('/usuarios/{usuarios}/edit', [UsuarioController::Class,'edit'])->name('usuarios.edit');
route::post('/usuarios', [UsuarioController::Class,'sendData']);
route::put('/usuarios/{usuarios}', [UsuarioController::Class,'update'])->name('usuarios.update');
route::delete('/usuarios/{usuarios}', [UsuarioController::Class,'destroy'])->name('usuarios.destroy');
