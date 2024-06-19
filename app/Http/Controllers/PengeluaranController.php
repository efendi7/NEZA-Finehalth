<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengeluaranController extends Controller
{
    public function index()
    {
        return view('buku');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string',
            'jumlah' => 'required|numeric',
        ]);

        $pengeluaran = Session::get('pengeluaran', []);
        $pengeluaran[$request->kategori] = $request->jumlah;
        Session::put('pengeluaran', $pengeluaran);

        return redirect()->route('analisis.index');
    }
}
