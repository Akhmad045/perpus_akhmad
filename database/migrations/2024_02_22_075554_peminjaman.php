<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Peminjaman',function(Blueprint $table){
            $table->integer('PeminjamanID')->autoIncrement;
            $table->integer('UserID');
            $table->integer('BukuID');
            $table->date('TanggalPeminjaman');
            $table->date('TanggalPengembalian');
            $table->enum('StatusPeminjaman',['Dikembalikan','Belum Dikembalikan']);
            $table->timestamps();
            $table->primary('PeminjamanID');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Peminjaman');
    }
};
