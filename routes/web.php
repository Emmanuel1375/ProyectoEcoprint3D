<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerUsuario;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/registrar', function () {
    return view('register');
})->name('register');

Route::get('/index', function () {
    return view('admin.index');
})->name('index');

Route::get('/dashboard', function () {
    return view('admin.dashboard', ['pageTitle' => 'Dashboard']);
})->name('dashboard');

Route::get('/impresoras', function (){
    return view('admin.Impresora3D.impresoras', ['pageTitle' => 'Impresoras']);
})->name('impresoras');

Route::get('/manual', function (){
    return view('admin.manual', ['pageTitle' => 'Manual']);
})->name('manual');

Route::get('/usuarios', [ControllerUsuario::class, 'index'])->name('usuarios');
Route::post('/usuarios', [ControllerUsuario::class, 'store'])->name('usuarios.store');

Route::get('/alquiler', function (){
    return view('admin.Alquiler.alquiler', ['pageTitle' => 'Alquiler']);
})->name('alquiler');


// ruta para crear usuario
Route::get('/usuarios/createUser', function (){
    return view('admin.Usuarios.crearUsuario', ['pageTitle' => 'Crear Usuario']);
})->name('createUser');

// ruta para editar usuario
Route::get('/usuarios/{usuario}/edit', [ControllerUsuario::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{usuario}', [ControllerUsuario::class, 'update'])->name('usuarios.update');