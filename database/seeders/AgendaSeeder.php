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
            "judulAgenda" => "Intermediate Training Tingkat Nasional",
            "deskripsi" => "Intermediate Training Tingkat Nasional bertujuan untuk mencetak kader-kader intelektual Islam yang berdedikasi untuk kemajuan bangsa dan masyarakat. Organisasi ini memiliki jaringan yang luas di seluruh universitas dan perguruan tinggi di Indonesia, dan anggotanya terdiri dari mahasiswa-mahasiswa dari berbagai latar belakang dan disiplin ilmu",
            "masalah" => "1. belum perampungan acara, 2. belum tercukupi pendaftar",
            "tanggalAgenda" => "2023-10-26",
            'periode' => "2023",
            "progressAgenda" => 45
        ]);
        Agenda::create([
            "judulAgenda" => "Khitanan Massal",
            "deskripsi" => "Khitanan Massal diadakan dalam rangka pengabdian pada masyarakat khususnya pada bidang kesehatan untuk melaksanakan khitan yang sesuai dengan syariat agama islam dan mengikuti kaidah kaidah kesehatan",
            "masalah" => "1. pihak yang diajak kerja sama belum didapatkan",
            "tanggalAgenda" => "2023-06-10",
            'periode' => "2023",
            "progressAgenda" => 100
        ]);
        Agenda::create([
            "judulAgenda" => "Senior Course Tingkat Nasional",
            "deskripsi" => "Senior Course merupakan salah satu pelatihan non-formal HMI1 sebagai wadah untuk membentuk calon instruktur.2 Pada pelatihan ini, anggota HMI yang telah lulus Latihan Kader II dan berniat  mendedikasikan diri untuk perkaderan akan ditempa hingga memiliki kapasitas pengelola latihan HMI. Karena itulah Senior Course juga dikategorikan sebagai pelatihan formal BPL HMI.",
            "masalah" => "1. belum rampung pendaftaran berkas kegiatan, 2. kegiatan ditunda karena pemateri berhalangan",
            "tanggalAgenda" => "2023-07-21",
            'periode' => "2023",
            "progressAgenda" => 100
        ]);
        Agenda::create([
            "judulAgenda" => "HMI Toefl",
            "deskripsi" => "HMI Toefl diadakan dalam rangka pengabdian pada masyarakat untuk mendorong kemampuan berbahasa inggris dalam berkomunikasi",
            "masalah" => "1. belum rampung pendaftaran berkas",
            "tanggalAgenda" => "2023-02-25",
            'periode' => "2023",
            "progressAgenda" => 100
        ]);
        Agenda::create([
            "judulAgenda" => "HMI Berkurban",
            "deskripsi" => "HMI Berkurban adalah program kerja yang dilaksanakan dalam rangka perayaan hari raya idul adha dengan menyumbang hewan kurban",
            "masalah" => "1. uang belum terkumpul sepenuhnya, 2. belum mendapatkan penjual sapi",
            "tanggalAgenda" => "2023-06-28",
            'periode' => "2023",
            "progressAgenda" => 100
        ]);
        Agenda::create([
            "judulAgenda" => "HMI Berbudaya",
            "deskripsi" => "HMI Berbudaya adalah program kerja yang dilaksanakan untuk memamerkan karya dan budaya dari anak HMI dalam bentuk pameran",
            "masalah" => "1. belum rampung pendaftaran berkas",
            "tanggalAgenda" => "2023-06-26",
            'periode' => "2023",
            "progressAgenda" => 60
        ]);
        Agenda::create([
            "judulAgenda" => "Festival Ekonomi Kreatif dan Syariah",
            "deskripsi" => "Festival Ekonomi Kreatif dan Syariah adalah program kerja dalam bentuk festival",
            "masalah" => "1. panitia kurang, 2. dana belum terkumpul sepenuhnya",
            "tanggalAgenda" => "2023-02-02",
            'periode' => "2023",
            "progressAgenda" => 60
        ]);
        Agenda::create([
            "judulAgenda" => "Lokakarya Perkaderan",
            "deskripsi" => "Lokakarya Perkaderan diadakan untuk menjaga nilai nilai HMI agar tidak hilang digerus zaman",
            "masalah" => "1. peserta kurang, 2. dana belum terkumpul",
            "tanggalAgenda" => "2023-05-05",
            'periode' => "2023",
            "progressAgenda" => 60
        ]);
        Agenda::create([
            "judulAgenda" => "Coaching Instruktur",
            "deskripsi" => "Coaching Instruktur diadakan untuk membentuk kader yang mampu menanamkan nilai nilai hmi ke kader baru ",
            "masalah" => "1. belum rampung pendaftaran berkas, 2. dana belum terkumpul, 3. peserta kurang",
            "tanggalAgenda" => "2023-10-15",
            'periode' => "2023",
            "progressAgenda" => 25
        ]);
        Agenda::create([
            "judulAgenda" => "HMI Charity",
            "deskripsi" => "HMI Charity  adalah bentuk simpati terhadap masyarakat yang masih mengalami masalah finansial atau yang terkena musibah",
            "masalah" => "1. dana belum terkumpul",
            "tanggalAgenda" => "2023-11-01",
            'periode' => "2023",
            "progressAgenda" => 35
        ]);
        Agenda::create([
            "judulAgenda" => "Buka Bersama dan Silatnas bersama KAHMI",
            "deskripsi" => "Buka Bersama dan Silatnas bersama KAHMI diadakan untuk menjaga silaturahmi bersama KAHMI",
            "masalah" => "1. dana belum cukup, 2. KAHMI belum memberi jadwal pasti ",
            "tanggalAgenda" => "2023-04-02",
            'periode' => "2023",
            "progressAgenda" => 60
        ]);
        Agenda::create([
            "judulAgenda" => "Penanaman 100 Pohon Sekaligus Hut Indonesia",
            "deskripsi" => "Penanaman 100 Pohon Sekaligus Hut Indonesia",
            "masalah" => "1. dana belum cukup, 2. masih mencari tempat untuk menanam pohon",
            "tanggalAgenda" => "2023-08-20",
            'periode' => "2023",
            "progressAgenda" => 70
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
            'deskripsi' => 'HMI akan melakukan rapat kerja nasional dalam rangka mewujudkan program kerja yang terintegrasi',
            'masalah' => "1. masih kurangnya pendaftar\r 2. diundur dari tanggal yang ditetapkan",
            'tanggalAgenda' => '2022-01-22',
            'periode' => '2022',
            'progressAgenda' => 100,
        ]);


        // agenda 2021
        Agenda::create([
            'judulAgenda' => 'latihan kepemimpinan II 2021',
            'deskripsi' => 'HMI melatih  kader kader untuk memenuhi nilai nilai kukuh dari HMI',
            'masalah' => "1. kader yang ditargetkan kurang\r 2. belum lengkap list fasilitator",
            'tanggalAgenda' => '2021-11-22',
            'periode' => '2021',
            'progressAgenda' => 100,
        ]);

        Agenda::create([
            'judulAgenda' => 'bakti sosial 2021',
            'deskripsi' => 'HMI memiliki jiwa sosial yang sangat tinggi dalam membantu manusia',
            'masalah' => '1. kekurangan sumber daya, 2. ',
            'tanggalAgenda' => '2022-11-22',
            'periode' => '2021',
            'progressAgenda' => 100,
        ]);

        Agenda::create([
            'judulAgenda' => 'rakernas HMI 2021',
            'deskripsi' => 'HMI akan melakukan rapat kerja nasional dalam rangka mewujudkan program kerja yang terintegrasi',
            'masalah' => "1. masih kurangnya pendaftar\r 2. diundur dari tanggal yang ditetapkan",
            'tanggalAgenda' => '2021-01-22',
            'periode' => '2021',
            'progressAgenda' => 100,
        ]);
    }
}
