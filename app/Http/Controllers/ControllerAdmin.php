<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Komisariat;
use App\Models\Anggota;
use App\Models\Artikel;
use App\Models\User;
use Illuminate\Http\Request;

class ControllerAdmin extends Controller
{
    public function index()
    {
        return view('DashboardAdmin', [
            'data' => Artikel::latest()->get()
        ]);
    }

    public function regisAnggota()
    {
        return view('Admin.RegistrasiAnggota', [
            "komisariat" => Komisariat::get(),
        ]);
    }

    public function regisKomisariat()
    {
        return view('Admin.RegistrasiKomisariat');
    }

    public function tambahProker()
    {
        return view('Admin.ProkerAdd');
    }

    public function editBerita()
    {
        return view('Admin.ControlBeritaAdmin', [
            'data' => Artikel::latest()->get()
        ]);
    }

    public function tambahAnggota(Request $request)
    {
        $validate = $request->validate([
            'nokader' => 'required|unique:anggotas',
            'nama' => 'required',
            'jenisKelamin' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required|date',
            'alamat' => 'required',
            'angkatan' => 'required|integer',
            'komisariat_id' => 'required'
        ]);

        Anggota::create($validate);

        $user = new User;
        $user->nama = $validate['nama'];
        $user->username = 'anggota';
        $user->password = bcrypt($validate['nokader']);
        $user->jenisAkun = 'anggota';

        $user->save();

        return redirect('/admin/dashboard');
    }

    public function tambahKomisariat(Request $request)
    {
        $validate = $request->validate([
            'nokomisariat' => 'required|integer|unique:komisariats',
            'namaKomisariat' => 'required',
            'tahunBerdiri' => 'required|integer',
            'status' => 'required',
            'angkatan' => 'required|integer',
        ]);

        Komisariat::create($validate);

        return redirect('/admin/dashboard');
    }

    public function validasiBerita($id)
    {
        // dd(Artikel::find($id));
        Artikel::where('id', $id)->update([
            'status' => 'acc',
        ]);


        return redirect('/admin/validasi-berita');
    }
}
