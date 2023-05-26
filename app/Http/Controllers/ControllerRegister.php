<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Komisariat;
use App\Models\Anggota;
use App\Models\Admin;

class ControllerRegister extends Controller
{
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

    public function tambahAnggota(Request $request)
    {
        $validate = $request->validate([
            'nokader' => 'required',
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
        $validasi['jenisAkun'] = 'Anggota';

        Anggota::create($validate);
        Admin::create($validasi);

        return redirect('/');
    }
}
