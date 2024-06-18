<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalisisController extends Controller
{
    public function index()
    {
        $pengeluaran = [
            'Makanan' => 500000,
            'Transportasi' => 200000,
            'Hiburan' => 300000,
            'Lainnya' => 100000,
        ];

        return view('analisis', ['pengeluaran' => $pengeluaran]);
    }
}
