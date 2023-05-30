<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Komisariat;
use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\Request;

class ControllerAdmin extends Controller
{
    public function index()
    {
        return view('Admin.DashboardAdmin');
    }

    public function regisAnggota()
    {
        return view('RegistrasiAnggota', [
            "komisariat" => Komisariat::get(),
        ]);
    }

    public function regisKomisariat()
    {
        return view('RegistrasiKomisariat');
    }

    public function tambahProker(){
        return view('Admin.ProkerAdd');
    }

    public function editBerita(){
        return view('Admin.editBerita');
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

        $validasi['nama'] = $validate['nama'];
        $validasi['username'] = 'anggota';
        $validasi['password'] = bcrypt($validate["nokader"]);
        $validasi['jenisAkun'] = 'anggota';

        Anggota::create($validate);
        User::create($validasi);

        return redirect('/');
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

        return redirect('/');
    }
}
