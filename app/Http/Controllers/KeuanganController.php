<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    // Menampilkan halaman admin
    public function index()
    {
        return view('admin'); // Sesuai dengan nama file `admin.blade.php`
        
    }
    public function showKeuangan()
    {
        // Ambil semua data keuangan
        $keuangan = Keuangan::all();
    
        // Kirim data ke view
        return view('keuangan', compact('keuangan'));
    }
    
    // Menyimpan data keuangan
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'keterangan' => 'required|string|max:255',
            'kategori' => 'required|string',
            'pemasukan' => 'nullable|integer',
            'pengeluaran' => 'nullable|integer',
            'saldo' => 'required|integer',
        ]);

        Keuangan::create([
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
            'kategori' => $request->kategori,
            'pemasukan' => $request->pemasukan,
            'pengeluaran' => $request->pengeluaran,
            'saldo' => $request->saldo,
        ]);

        return redirect('/admin')->with('success', 'Data berhasil disimpan!');
    }
}
