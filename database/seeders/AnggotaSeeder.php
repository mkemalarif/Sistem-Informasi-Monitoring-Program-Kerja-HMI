<?php

namespace Database\Seeders;

use App\Models\Agenda;
use App\Models\Anggota;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anggota::create([
            'nokader' => '20180261',
            'nama' => 'rizal arsy',
            'jenisKelamin' => 'Perempuan',
            'tempatLahir' => 'Makassar',
            'tanggalLahir' => '2000-11-22',
            'alamat' => 'daya',
            'angkatan' => 2,
            'komisariat_id' => 1,
        ]);

        Agenda::create([
            'judulAgenda' => 'diklat',
            'deskripsi' => 'lorem ipsum',
            'masalah' => '1. salah',
            'tanggalAgenda' => '2023-11-22',
            'progressAgenda' => 0,
        ]);
    }
}
