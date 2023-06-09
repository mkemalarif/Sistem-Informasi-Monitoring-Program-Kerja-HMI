<?php

use App\Models\Admin;
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
// Route::get('/', [Homepage::class, "index"])->middleware('login');

// Routes default

// Route::get('/', function () {
//     return view('DashboardAdmin');
// });

Route::get('/', function () {
    return view('ControlBerita');
});





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
        Route::get('/data-anggota', 'listAnggota');
        Route::get('/program-kerja', 'proker');
        Route::get('/kontrol-berita', 'controlBerita');
        Route::post('/tambah-berita', 'post');
        Route::put('/profile-setting/{id}', 'profileEdit');
        Route::put('/edit-berita/{id}', 'editBerita');
    });

// semua route untuk admin
Route::middleware('admin')->prefix('admin')
    ->controller(ControllerAdmin::class)->group(function () {
        Route::get('/dashboard', 'index');
        Route::get('/registrasi-member', 'regisAnggota');
        Route::get('/data-anggota', 'listAnggota');
        Route::get('/registrasi-komisariat', 'regisKomisariat');
        Route::get('/tambah-proker', 'tambahProker');
        Route::get('/validasi-berita', 'editBerita');
        Route::post('/registrasi-member', 'tambahAnggota');
        Route::post('/registrasi-komisariat', 'tambahKomisariat');
        Route::put('/validasi-berita/{id}', 'validasiBerita');
    });

// semua route untuk ketua
Route::middleware('ketua')->prefix('ketua')
    ->controller(ControllerKetua::class)->group(function () {
        Route::get('/dashboard', 'index');
        Route::get('/tambah-akun-admin', 'create');
        Route::get('/tambah-proker', 'programKerja');
        // Route::get('/tambah-anggota',);
        Route::post('/tambah-proker', 'tambahProker');
    });
