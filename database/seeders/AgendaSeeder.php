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
            'judulAgenda' => 'HMI berkurban 2022',
            'deskripsi' => 'HMI berpegang dengan nilai nilai islami, dalam rangka hari raya kurban, maka HMI akan menyumbangkan 1 ekor sapi dan 3 ekor kambing dalam idul adha ini',
            'masalah' => "1. masih belum didapatkan penjual sapi \r, 2. masih belum mendapatkan penyalur daging kurban\r 3. belum terkumpul secara keseluruhan",
            'tanggalAgenda' => '2022-05-26',
            'periode' => '2022',
            'progressAgenda' => 100,
        ]);
        Agenda::create([
            'judulAgenda' => 'bakti sosial 2022',
            'deskripsi' => 'HMI akan mengadakan bakti sosial untuk membantu yang sedang kesusahan',
            'masalah' => "1. belum tercukupi dana",
            'tanggalAgenda' => '2022-11-22',
            'periode' => '2022',
            'progressAgenda' => 100,
        ]);
        Agenda::create([
            'judulAgenda' => 'latihan kepemimpinan II 2022',
            'deskripsi' => 'HMI melatih  kader kader untuk memenuhi nilai nilai kukuh dari HMI',
            'masalah' => "1. kader yang ditargetkan kurang\r 2. belum lengkap list fasilitator",
            'tanggalAgenda' => '2022-11-22',
            'periode' => '2022',
            'progressAgenda' => 100,
        ]);

        Agenda::create([
            'judulAgenda' => 'rakernas HMI 2022',
            'deskripsi' => 'HMI ',
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
