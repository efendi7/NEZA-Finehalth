<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/buku', function () {
    return view('Buku');
});

Route::get('/dompet', function () {
    return view('Dompet');
});

Route::get('/analisis', function () {
    return view('Analisis', [ 
        "pengeluaran" => "Makanan",
        "presentase" => "100%",
        "harga" => "5000"
    ]);
});

Route::get('/more', function () {
    return view('More');
});


Route::get('/signup', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/signup', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

use App\Http\Controllers\AnalisisController;

Route::get('/analisis', [AnalisisController::class, 'index'])->middleware('auth');



