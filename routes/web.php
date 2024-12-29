<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('mahasiswa', function () {
    // return view('mahasiswa');
    $nim = [123,124,125];
    // while
    $nilai_awal = 0;
});