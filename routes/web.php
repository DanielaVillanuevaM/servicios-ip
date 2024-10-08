<?php

use App\Http\Controllers\ControllerUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('scan');
});

Route::get('/acerca', function () {
    return view('acercade');
});

Route::get('/gestor', [ControllerUser::class, 'set'])->name('gestor.set');

Route::get('/login', function () {
    return view('login');
});

Route::get('/uso', function () {
    return view('acuerdosdeuso');
});

Route::get('/guia', function () {
    return view('guia');
});

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [ControllerUser::class, 'store'])->name('register.store');

Route::get('/resultados', function () {
    return view('resultados');
});

Route::get('/seleccionado', function () {
    return view('usuarioseleccionado');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/cve', function () {
    return view('cve');
});
