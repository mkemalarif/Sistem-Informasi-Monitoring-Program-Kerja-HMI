<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use App\Models\User;
>>>>>>> 87ea5a391c70689ab4c42f07caa0f8e8074e6fe8

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
=======

        $this->call([
            KomisariatSeeder::class,
            AnggotaSeeder::class,
            ArtikelSeeder::class,
            AgendaSeeder::class,
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
            'username' => 'anggota',
            'password' => bcrypt('anggota'),
            'jenisAkun' => 'anggota',
        ]);
>>>>>>> 87ea5a391c70689ab4c42f07caa0f8e8074e6fe8
    }
}
