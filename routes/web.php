<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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
    return view('Analisis', [
        "pengeluaran" => "Makanan",
        "presentase" => "100%",
        "harga" => "5000"
    ]);
});

Route::get('/more', function () {
    return view('more');
});


Route::get('/signup', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/signup', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

use App\Http\Controllers\AnalisisController;

Route::get('/analisis', [AnalisisController::class, 'index'])->middleware('auth');

