<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/usuarios', function (){
    return view('admin.Usuarios.usuarios', ['pageTitle' => 'Usuarios']);
})->name('usuarios');

Route::get('/alquiler', function (){
    return view('admin.Alquiler.alquiler', ['pageTitle' => 'Alquiler']);
})->name('alquiler');
