<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeuanganController;
use App\Models\Keuangan;

// Rute halaman admin untuk menampilkan form
Route::get('/admin', [KeuanganController::class, 'index'])->name('admin.index');

// Rute untuk menyimpan data keuangan
Route::post('/admin', [KeuanganController::class, 'store'])->name('admin.store');

// Halaman lain
Route::get('/', function () {
    return view('home');
});

Route::get('/keuangan', function () {
    return view('keuangan'); 
});

Route::get('/struktur_kelas', function () {
    return view('struktur_kelas');  
});

Route::get('/profil', function () {
    return view('profil'); 
});

Route::get('/galeri', function () {
    return view('galeri'); 
});
