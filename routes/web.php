<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/home', function () {
    return view('Home');
});

Route::get('/buku', function () {
    return view('Buku');
});

Route::get('/dompet', function () {
    return view('Dompet');
});

Route::get('/analisis', function () {
    return view('Analisis');
});

Route::get('/more', function () {
    return view('More');
});
