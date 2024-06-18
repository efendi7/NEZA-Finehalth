<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/welcome', function () {
    return view('Welcome page');
});

Route::get('/login', function () {
    return view('login page');
});

Route::get('/signup', function () {
    return view('signup page');
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
    return view('Analisis', [ 
        "pengeluaran" => "Makanan",
        "presentase" => "100%",
        "harga" => "5000"
    ]);
});

Route::get('/more', function () {
    return view('More');
});


Route::get('/signup', [RegisterController::class, 'index']);
Route::post('/signup', [RegisterController::class, 'store']);

use App\Http\Controllers\AnalisisController;

Route::get('/analisis', [AnalisisController::class, 'index']);



