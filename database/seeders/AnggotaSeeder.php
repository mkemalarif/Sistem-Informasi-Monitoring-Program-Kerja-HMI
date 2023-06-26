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

        Anggota::create([
            'nokader' => '20180262',
            'nama' => 'Ibnu Zuhud',
            'jenisKelamin' => 'Laki-laki',
            'tempatLahir' => 'Makassar',
            'tanggalLahir' => '2000-11-22',
            'alamat' => 'daya',
            'angkatan' => 2,
            'komisariat_id' => 1,
        ]);
        Anggota::create([
            'nokader' => '20180263',
            'nama' => 'Ilham',
            'jenisKelamin' => 'Laki-laki',
            'tempatLahir' => 'Makassar',
            'tanggalLahir' => '2000-11-22',
            'alamat' => 'daya',
            'angkatan' => 2,
            'komisariat_id' => 1,
        ]);
        Anggota::create([
            'nokader' => '20180259',
            'nama' => 'Faidhul Barkah',
            'jenisKelamin' => 'Laki-laki',
            'tempatLahir' => 'Makassar',
            'tanggalLahir' => '2000-11-22',
            'alamat' => 'daya',
            'angkatan' => 2,
            'komisariat_id' => 2,
        ]);
    }
}
