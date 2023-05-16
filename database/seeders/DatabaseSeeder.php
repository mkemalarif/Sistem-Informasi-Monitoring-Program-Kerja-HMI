<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            KomisariatSeeder::class,
            AnggotaSeeder::class,
            ArtikelSeeder::class,
        ]);
        Admin::create([
            'nama' => 'andi muhammad kemal',
            'username' => 'ketua',
            'password' => bcrypt('admin'),
            'jenisAkun' => 'ketua',
        ]);
        Admin::create([
            'nama' => 'muhammad faidhul',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'jenisAkun' => 'admin',
        ]);
        Admin::create([
            'nama' => 'rizal arsy',
            'username' => 'rizal',
            'password' => bcrypt('anggota'),
            'jenisAkun' => 'ketua',
        ]);
    }
}
