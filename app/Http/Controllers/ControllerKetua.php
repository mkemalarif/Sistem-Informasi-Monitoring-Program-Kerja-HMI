<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\User;
use App\Models\Komisariat;
use App\Models\Anggota;

class ControllerKetua extends Controller
{
    public function index()
    {
        return view('Ketua.DashboardKetua', [
            'data' => Agenda::latest()->get(),
            'komisariat' => Komisariat::get()
        ]);
    }

    public function create()
    {
        return view('Ketua.AkunAdmin');
    }

    public function programKerja()
    {
        return view('Admin.ProkerAdd');
    }

    public function ketuaDataAnggota($id)
    {
        return view('DataAnggota', [
            'data' => Anggota::where('id', $id)->get(),
        ]);
    }

    public function ketuaEditAnggota($id)
    {
        return view('editDataAnggota', [
            'data' => Anggota::find($id),
            'komisariat' => Komisariat::get()
        ]);
    }

    public function ketuaEditKomisariat($id)
    {
        return view('Admin.editKomisariat', [
            "data" => Komisariat::find($id)
        ]);
    }

    public function ketuaTambahAdmin(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $validate['password'] = bcrypt($validate['password']);
        $validate['jenisAkun'] = 'admin';

        // dd($validate);
        User::create($validate);

        return redirect('/ketua/dashboard');
    }

    public function ketuaTambahAnggota()
    {
        return view('Admin.RegistrasiAnggota', [
            'komisariat' => Komisariat::get()
        ]);
    }
    public function ketuaTambahKomisariat()
    {
        return view('Admin.RegistrasiKomisariat', [
            'komisariat' => Komisariat::get()
        ]);
    }

    public function ketuaAnggotaTambah(Request $request)
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

        return redirect('/ketua/dashboard');
    }

    public function ketuaKomisariatTambah(Request $request)
    {
        $validate = $request->validate([
            'nokomisariat' => 'required|integer|unique:komisariats',
            'namaKomisariat' => 'required',
            'tahunBerdiri' => 'required|integer',
            'status' => 'required',
            'angkatan' => 'required|integer',
        ]);

        Komisariat::create($validate);

        return redirect('/ketua/dashboard');
    }

    public function ketuaEditProker($id)
    {
        return view('Admin.editProker', [
            'data' => Agenda::find($id)
        ]);
    }

    public function ketuaTambahProker(Request $request)
    {
        $validate = $request->validate([
            'judulAgenda' => 'required',
            'tanggalAgenda' => 'required',
            'deskripsi' => 'required'
        ]);

        $validate['progressAgenda'] = 0;

        // dd($validate);

        Agenda::create($validate);

        return redirect('/ketua/dashboard');
    }

    public function ketuaProkerEdit(Request $request, $id)
    {
        $update = $request->validate([
            'judulAgenda' => 'required',
            'deskripsi' => 'required',
            'masalah' => 'required',
            'tanggalAgenda' => 'required',
            'progressAgenda' => 'required|integer'
        ]);

        // dd($update);

        Agenda::where('id', $id)->update($update);

        return redirect('/ketua/dashboard');
    }

    public function ketuaKomisariatEdit(Request $request, $id)
    {
        $update = $request->validate([
            'nokomisariat' => 'required',
            'namaKomisariat' => 'required',
            'tahunBerdiri' => 'required|integer',
            'status' => 'required',
            'angkatan' => 'required|integer'
        ]);

        Komisariat::where("id", $id)->update($update);
    }

    public function ketuaEditDataAnggota(Request $request, $id)
    {
        $data = Anggota::find($id)->nokader;
        $newNokader = $request->input('nokader');
        // dd($data);
        if ($data !==  $newNokader) {
            $update = $request->validate([
                'nokader' => 'required|unique:anggotas',
                'nama' => 'required',
                'jenisKelamin' => 'required',
                'tempatLahir' => 'required',
                'tanggalLahir' => 'required|date',
                'alamat' => 'required',
                'angkatan' => 'required|integer',
                'komisariat_id' => 'required'
            ]);
        } else {
            $update = $request->validate([
                // 'nokader' => 'required|unique:anggotas',
                'nama' => 'required',
                'jenisKelamin' => 'required',
                'tempatLahir' => 'required',
                'tanggalLahir' => 'required|date',
                'alamat' => 'required',
                'angkatan' => 'required|integer',
                'komisariat_id' => 'required'
            ]);
        }


        Anggota::where("id", $id)->update($update);

        return redirect('ketua/dashboard');
    }

    public function ketuaDeleteKomisariat($id)
    {
        Komisariat::find($id)->delete();

        return redirect('/ketua/dashboard');
    }
    public function ketuaDeleteAnggota($id)
    {
        Anggota::find($id)->delete();

        return redirect('/ketua/dashboard');
    }

    public function ketuaDeleteProker($id)
    {
        Agenda::find($id)->delete();

        return redirect('/ketua/dashboard');
    }
}
