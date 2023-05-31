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
Route::get('/', [Homepage::class, "index"]);

// Routes default
// Route::get('/', function () {
//     return view('ControlBerita');
// });




Route::controller(LoginController::class)->group(function () {
    Route::get('login', "index")->name('login');
    Route::post('/login', 'authenticate')->name('login');
    Route::get('/logout', 'logout');
});

// semua route untuk anggota
Route::middleware('anggota')->controller(ControllerAnggota::class)->group(function () {
    Route::get('/dashboard-anggota', "index");
    Route::get('/profile-setting', 'profileSet');
    Route::get('/tambah-berita', 'create');
    Route::get('/data-anggota', 'listAnggota');
    Route::get('/program-kerja', 'proker');
    Route::post('/tambah-berita', 'post');
});

// semua route untuk admin
Route::middleware('admin')->controller(ControllerAdmin::class)->group(function () {
    Route::get('/dashboard-admin', 'index');
    Route::get('/registrasi-member', 'regisAnggota');
    // Route::get('/data-anggota', 'listAnggota');
    Route::get('/registrasi-komisariat', 'regisKomisariat');
    Route::get('/tambah-proker', 'tambahProker');
    Route::get('/validasi-berita', 'editBerita');
    Route::post('/registrasi-member', 'tambahAnggota');
    Route::post('/registrasi-komisariat', 'tambahKomisariat');
});

// semua route untuk ketua
Route::middleware('ketua')->controller(ControllerKetua::class)->group(function () {
    Route::get('/dashboard-ketua', 'index');
    Route::get('/tambah-akun-admin', 'create');
    Route::get('/tambah-proker', 'programKerja');
    Route::get('/tambah-anggota',);
});
