<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/keuangan', function () {
    return view('keuangan'); // Mengarahkan ke file resources/views/keuangan.blade.php
});

Route::get('/admin', function () {
    return view('admin'); // Mengarahkan ke file resources/views/admin.blade.php
});

Route::get('/struktur-kelas', function () {
    return view('struktur_kelas');  
});
