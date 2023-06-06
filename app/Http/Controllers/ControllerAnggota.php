<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Anggota;
use Illuminate\Http\UploadedFile;

class ControllerAnggota extends Controller
{
    public function index()
    {
        return view('Anggota.DashboardAnggota');
    }

    public function create()
    {
        return view('Anggota.AddBerita');
    }

    public function post(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required',
            'isiBerita' => 'required',
        ]);
        $validate['status'] = 'tunda';
        $validate['user_id'] = auth()->user()->id;


        $id = Artikel::create($validate)->id;

        $foto = $request->file('image')->storeAs(
            'foto berita user ' . $request->user()->id,
            'foto' . $id . '.jpg'
        );


        return redirect('/anggota/dashboard');
    }

    // menampilkan data anggota
    public function listAnggota()
    {
        return view('DataAnggota');
    }

    // list proker
    public function proker()
    {
        return view('ProkerCek');
    }

    public function profileSet()
    {
        return view("Anggota.ProfileSettingAnggota");
    }
}
