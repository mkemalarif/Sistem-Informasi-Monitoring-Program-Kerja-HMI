<?php

// use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homepage;
use App\Http\Controllers\ControllerAnggota;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerKetua;
use App\Http\Controllers\ControllerRegister;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// route free for all dan semua kebutuhan homepage
Route::get('/', [Homepage::class, "index"])->middleware('login');
Route::get('/berita/{id}', [Homepage::class, "detailBerita"]);

// Routes default

Route::get('/berita', function () {
    return view('DetailBerita');
});

// Route::get('/opini', function () {
//     return view('Opini');
// });





Route::middleware('login')->controller(LoginController::class)->group(function () {
    Route::get('login', "index")->name('login');
    Route::post('/login', 'authenticate')->name('login');
});
Route::get('/logout', [LoginController::class, 'logout']);

// semua route untuk anggota
Route::middleware('anggota')->prefix('anggota')
    ->controller(ControllerAnggota::class)->group(function () {
        Route::get('/dashboard', "index");
        Route::get('/profile-setting/{id}', 'profileSet');
        Route::get('/tambah-berita', 'addBerita');
        Route::get('/edit-berita/{id}', 'beritaEdit');
        Route::get('/list-komisariat', 'komisariat');
        Route::get('/data-anggota/{id}', 'listAnggota');
        Route::get('/program-kerja', 'proker');
        Route::get('/kontrol-berita', 'controlBerita');
        Route::get('/cek-berita/{id}', 'cekBerita');
        Route::post('/tambah-berita', 'post');
        Route::put('/profile-setting/{id}', 'profileEdit');
        Route::put('/edit-berita/{id}', 'editBerita');
        Route::delete('/kontrol-berita/{id}', 'hapusBerita');
    });

// semua route untuk admin
Route::middleware('admin')->prefix('admin')
    ->controller(ControllerAdmin::class)->group(function () {
        Route::get('/dashboard', 'index');
        Route::get('/registrasi-member', 'regisAnggota');
        Route::get('/data-anggota', 'listAnggota');
        Route::get('/registrasi-komisariat', 'regisKomisariat');
        Route::get('/tambah-proker', 'tambahProker');
        Route::get('/edit-proker/{id}', 'adminEditProker');
        Route::get('/list-komisariat', 'komisariat');
        Route::get('/data-anggota/{id}', 'dataAnggota');
        Route::get('/edit-data-anggota/{id}', 'adminEditAnggota');
        Route::get('/admin/edit-komisariat/{id}', 'adminEditKomisariat');
        Route::get('/admin/edit-proker/{id}', 'adminEditProker');
        Route::get('/cek-berita/{id}', 'adminTampilBerita');
        Route::post('/registrasi-member', 'tambahAnggota');
        Route::post('/registrasi-komisariat', 'tambahKomisariat');
        Route::post('/tambah-proker', 'adminTambahProker');
        Route::put('/validasi-berita/{id}', 'validasiBerita');
        Route::put('/edit-proker/{id}', 'adminProkerEdit');
        Route::put('edit-komisariat/{id}', 'adminKomisariatEdit');
        Route::put('/edit-data-anggota/{id}', 'adminEditDataAnggota');
        // Route::put('/admin/edit-proker/{id}', 'adminProkerEdit');
        Route::delete('/hapus-komisariat/{id}', 'adminDeleteKomisariat');
        Route::delete('/hapus-data-anggota/{id}', 'adminDeleteAnggota');
        Route::delete('/hapus-proker/{id}', 'prokerHapus');
    });

// semua route untuk ketua
Route::middleware('ketua')->prefix('ketua')
    ->controller(ControllerKetua::class)->group(function () {
        Route::get('/dashboard', 'index');
        Route::get('/tambah-akun-admin', 'create');
        Route::get('/tambah-proker', 'programKerja');
        Route::get('/tambah-anggota', 'ketuaTambahAnggota');
        Route::get('/tambah-komisariat', 'ketuaTambahKomisariat');
        Route::get('/ketua/edit-proker/{id}', 'ketuaEditProker');
        Route::get('/ketua/edit-komisariat/{id}', 'ketuaEditKomisariat');
        Route::get('/edit-data-anggota/{id}', 'ketuaEditAnggota');
        Route::get('/edit-data-admin/{id}', 'editDataAdmin');
        Route::get('/data-anggota/{id}', 'ketuaDataAnggota');
        Route::get('/rekap-proker', 'rekapProker');
        Route::get('/rekap-proker/{periode}', 'rekapProkerDariTahun');
        Route::get('/list-akun-admin', "akunAdmin");
        Route::post('/tambah-akun-admin', 'ketuaTambahAdmin');
        Route::post('/registrasi-member', 'ketuaAnggotaTambah');
        Route::post('/registrasi-komisariat', 'ketuaKomisariatTambah');
        Route::post('/tambah-proker', 'ketuaTambahProker');
        Route::put('edit-komisariat/{id}', 'ketuaKomisariatEdit');
        Route::put('/edit-data-anggota/{id}', 'ketuaEditDataAnggota');
        Route::put('/edit-data-admin/{id}', 'editAdmin');
        Route::delete('/hapus-komisariat/{id}', 'ketuaDeleteKomisariat');
        Route::delete('/hapus-data-anggota/{id}', 'ketuaDeleteAnggota');
        Route::delete('/hapus-admin/{id}', 'hapusAdmin');
    });
