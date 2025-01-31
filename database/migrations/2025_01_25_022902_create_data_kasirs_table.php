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
        Schema::create('data_kasir', function (Blueprint $table) {
            $table->string('kode_kasir',6)->unique()->primary();
            $table->string('nama_kasir',20);
            $table->time('shift_mulai');
            $table->time('shift_akhir',);
            $table->string('notelp_kasir',13);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kasirs');
    }
};
