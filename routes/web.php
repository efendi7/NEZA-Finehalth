<?php

use App\Http\Controllers\RegisterController;
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

Route::get('/login', function () {
    return view('login_page');
});

Route::get('/signup', [RegisterController::class, 'index']);
Route::post('/signup', [RegisterController::class, 'store']);