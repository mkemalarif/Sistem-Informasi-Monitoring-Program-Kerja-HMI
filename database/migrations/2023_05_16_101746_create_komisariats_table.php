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
        Schema::create('komisariats', function (Blueprint $table) {
            $table->id();
            $table->integer('nokomisariat');
            $table->string('namaKomisariat');
            $table->integer('tahunBerdiri');
            // form edit
            $table->enum('status', ['Aktif', 'Nonaktif']);
            $table->integer('angkatan');
            $table->timestamps();

            // jumlah anggota
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komisariats');
    }
};
