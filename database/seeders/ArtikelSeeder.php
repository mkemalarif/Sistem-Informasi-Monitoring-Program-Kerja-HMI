<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artikel;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artikel::create([
            'judul' => 'Lorem, ipsum dolor.',
            'isiBerita' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ducimus quae repellendus a possimus. Illo.',
            'anggota_id' => 1,
            'status' => 'tunda',
        ]);
    }
}
