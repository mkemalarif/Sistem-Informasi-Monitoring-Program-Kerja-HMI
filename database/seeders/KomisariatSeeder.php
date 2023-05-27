<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Komisariat;

class KomisariatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Komisariat::create([
            'nokomisariat' => 130,
            'namaKomisariat' => 'HMI Komisariat Fikom UMI',
            'tahunBerdiri' => 2012,
            'status' => 'Aktif',
            'angkatan' => 11,
        ]);
        Komisariat::create([
            'nokomisariat' => 030,
            'namaKomisariat' => 'HMI Komisariat Teknik UMI',
            'tahunBerdiri' => 2012,
            'status' => 'Aktif',
            'angkatan' => 11,
        ]);
    }
}
