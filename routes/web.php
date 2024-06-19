<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalisisController;

// Welcome page
Route::get('/', function () {
    return view('Welcome');
});

// Buku page
Route::get('/buku', function () {
    return view('Buku');
});

// Dompet page
Route::get('/dompet', function () {
    return view('Dompet');
});

// More page
Route::get('/more', function () {
    return view('More');
});

// Registration routes
Route::get('/signup', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/signup', [RegisterController::class, 'store']);

// Login routes
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Analisis welcome page
Route::get('/analisis', function () {
    return view('Analisis.welcome', [ 
        "pengeluaran" => "Makanan",
        "presentase" => "100%",
        "harga" => "5000"
    ]);
});

// Analisis index page (protected by auth middleware)
Route::get('/analisis/index', [AnalisisController::class, 'index'])->middleware('auth');
