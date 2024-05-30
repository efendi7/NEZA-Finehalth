<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/buku', function () {
    return view('buku');
});

Route::get('/dompet', function () {
    return view('dompet');
});

Route::get('/analisis', function () {
    return view('analisis');
});

Route::get('/more', function () {
    return view('more');
});
