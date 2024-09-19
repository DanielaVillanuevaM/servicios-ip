<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('scan');
});

Route::get('/Acerca de...', function () {
    return view('acercade');
});

Route::get('/Gestor de Usuarios', function () {
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

Route::get('/inicioR', function () {
    return view('inicioR');
});

Route::get('/resultados', function () {
    return view('resultados');
});