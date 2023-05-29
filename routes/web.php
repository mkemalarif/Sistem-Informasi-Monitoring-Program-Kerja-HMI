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

Route::get('/login', [LoginController::class, "index"]);
Route::post('/login', [LoginController::class, "authenticate"]);
Route::get('/logout', [LoginController::class, "logout"]);


// semua route untuk anggota
Route::resource('/dashboard-anggota', ControllerAnggota::class)->middleware('auth');

Route::get('/profile-set-anggota', function () {
    return view('ProfileSettingAnggota');
});

// semua route untuk admin
Route::resource('/dashboard', ControllerAdmin::class)->middleware('admin');

Route::get('/registrasi-member', [ControllerRegister::class, "regisAnggota"]);
Route::post('/registrasi-member', [ControllerRegister::class, "tambahAnggota"]);

Route::get('/registrasi-komisariat', [ControllerRegister::class, "regisKomisariat"]);
Route::post('/registrasi-komisariat', [ControllerRegister::class, "tambahKomisariat"]);


// semua route untuk ketua
Route::resource('/dashboard', ControllerKetua::class)->middleware('ketua');
