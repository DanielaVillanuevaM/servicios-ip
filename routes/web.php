<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('scan');
});

Route::get('/acerca', function () {
    return view('acercade');
});

Route::get('/gestor', function () {
    return view('gestorlista');
});

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

Route::get('/resultados', function () {
    return view('resultados');
});

Route::get('/seleccionado', function () {
    return view('usuarioseleccionado');
});

Route::get('/prueba', function () {
    return view('prueba');
});

use App\Http\Controllers\NmapController;

Route::get('/nmap', [NmapController::class, 'index']);
Route::post('/nmap/scan', [NmapController::class, 'scan']);
