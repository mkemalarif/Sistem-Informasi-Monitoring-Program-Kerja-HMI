<?php

use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homepage;
use App\Http\Controllers\ControllerAnggota;

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

// Route::get('/', [Homepage::class, "index"]);

Route::get('/', function () {
    return view('EditBerita');
});

Route::get('/data-anggota', function () {
    return view('DataAnggota');
});

Route::get('registrasi-member', function () {
    return view('RegistrasiAnggota');
});

Route::get('registrasi-komisariat', function () {
    return view('RegistrasiKomisariat');
});

Route::get('profile-set-anggota', function () {
    return view('ProfileSettingAnggota');
});

Route::resource('dashboard', ControllerAnggota::class);
