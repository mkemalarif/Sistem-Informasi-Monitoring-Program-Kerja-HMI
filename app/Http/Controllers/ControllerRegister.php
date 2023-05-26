<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerRegister extends Controller
{
    public function regisAnggota()
    {
        return view('RegistrasiAnggota');
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

        dd($validate);
    }
}
