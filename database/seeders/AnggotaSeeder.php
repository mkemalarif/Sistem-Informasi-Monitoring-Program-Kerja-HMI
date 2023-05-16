<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anggota;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anggota::create([
            'nama' => 'rizal arsy',
            'jenisKelamin' => 'Perempuan',
            'tempatLahir' => 'Makassar',
            'tanggalLahir' => '2000-11-22',
            'alamat' => 'daya',
            'angkatan' => 2,
            'komisariat_id' => 1,
        ]);
    }
}
