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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('nokader');
            $table->string('nama');
            $table->enum('jenisKelamin', ['Laki-laki', 'Perempuan']);
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->string('alamat');
            $table->integer('angkatan');
            $table->foreignId('komisariat_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
