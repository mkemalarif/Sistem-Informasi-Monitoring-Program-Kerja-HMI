<?php

namespace Database\Seeders;

use App\Models\Agenda;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Agenda::create([
            'judulAgenda' => 'diklat',
            'deskripsi' => 'lorem ipsum',
            'masalah' => '1. salah',
            'tanggalAgenda' => '2023-11-22',
            'periode' => '2023',
            'progressAgenda' => 0,
        ]);

        // agenda 2022

        Agenda::create([
            'judulAgenda' => 'diklat2022',
            'deskripsi' => 'lorem ipsum',
            'masalah' => '1. salah',
            'tanggalAgenda' => '2022-11-22',
            'periode' => '2022',
            'progressAgenda' => 100,
        ]);
        Agenda::create([
            'judulAgenda' => 'bakti sosial 2022',
            'deskripsi' => 'lorem ipsum',
            'masalah' => '1. salah',
            'tanggalAgenda' => '2022-11-22',
            'periode' => '2022',
            'progressAgenda' => 100,
        ]);
        Agenda::create([
            'judulAgenda' => 'diklat2022',
            'deskripsi' => 'lorem ipsum',
            'masalah' => '1. salah',
            'tanggalAgenda' => '2022-11-22',
            'periode' => '2022',
            'progressAgenda' => 100,
        ]);

        Agenda::create([
            'judulAgenda' => 'rakernas',
            'deskripsi' => 'lorem ipsum',
            'masalah' => '1. salah',
            'tanggalAgenda' => '2022-11-22',
            'periode' => '2022',
            'progressAgenda' => 100,
        ]);


        // agenda 2021
        Agenda::create([
            'judulAgenda' => 'diklat2021',
            'deskripsi' => 'lorem ipsum',
            'masalah' => '1. salah',
            'tanggalAgenda' => '2022-11-22',
            'periode' => '2022',
            'progressAgenda' => 100,
        ]);

        Agenda::create([
            'judulAgenda' => 'bakti sosial 2021',
            'deskripsi' => 'lorem ipsum',
            'masalah' => '1. salah',
            'tanggalAgenda' => '2022-11-22',
            'periode' => '2021',
            'progressAgenda' => 100,
        ]);

        Agenda::create([
            'judulAgenda' => 'bakti sosial 2021',
            'deskripsi' => 'lorem ipsum',
            'masalah' => '1. salah',
            'tanggalAgenda' => '2022-11-22',
            'periode' => '2021',
            'progressAgenda' => 100,
        ]);
    }
}
