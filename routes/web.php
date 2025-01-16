<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeuanganController;
use App\Models\Keuangan;

Route::get('/admin', [KeuanganController::class, 'index'])->name('admin.index');

Route::post('/admin', [KeuanganController::class, 'store'])->name('admin.store');

Route::get('/keuangan', [KeuanganController::class, 'showKeuangan']);

Route::get('/', function () {
    return view('home');
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
