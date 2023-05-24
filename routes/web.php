<?php

use App\Models\Admin;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('ProfileSettingAnggota');
});

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/login', function () {
//     return view('home');
// });

// Route::post('/login', function () {
//     // Handle login form submission logic here
// })->name('login');

?>
