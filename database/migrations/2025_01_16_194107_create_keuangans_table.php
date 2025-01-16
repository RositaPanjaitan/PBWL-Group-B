<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('keuangans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('keterangan');
            $table->string('kategori');
            $table->integer('pemasukan')->nullable();
            $table->integer('pengeluaran')->nullable();
            $table->integer('saldo');
            $table->timestamps();
        });
    }
    
};
