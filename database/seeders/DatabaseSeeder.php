<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
        User::create([
            'nama' => 'andi muhammad kemal',
            'username' => 'ketua',
            'password' => bcrypt('ketua'),
            'jenisAkun' => 'ketua',
        ]);
        User::create([
            'nama' => 'muhammad faidhul',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'jenisAkun' => 'admin',
        ]);
        User::create([
            'nama' => 'rizal arsy',
            'username' => 'rizal',
            'password' => bcrypt('anggota'),
            'jenisAkun' => 'anggota',
        ]);
    }
}
