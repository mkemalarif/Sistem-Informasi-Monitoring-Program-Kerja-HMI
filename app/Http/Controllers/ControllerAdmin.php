<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Komisariat;
use App\Models\Anggota;
use App\Models\Artikel;
use App\Models\Agenda;
use App\Models\User;
use Illuminate\Http\Request;

class ControllerAdmin extends Controller
{
    public function index()
    {
        return view('Admin.DashboardAdmin', [
            'data' => Artikel::latest()->get(),
            'proker' => Agenda::where('periode', 2023)->get()
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

    public function komisariat()
    {
        return view('Admin.komisariat', [
            'komisariat' => Komisariat::get()
        ]);
    }

    public function dataAnggota($id)
    {
        return view('DataAnggota', [
            'data' => Anggota::where('komisariat_id', $id)->get(),
        ]);
    }

    public function adminEditAnggota($id)
    {
        return view('editDataAnggota', [
            'data' => Anggota::find($id),
            'komisariat' => Komisariat::get()
        ]);
    }

    public function adminEditKomisariat($id)
    {
        return view('Admin.editKomisariat', [
            "data" => Komisariat::find($id)
        ]);
    }

    public function adminEditProker($id)
    {
        return view('Admin.editProker', [
            'data' => Agenda::find($id)
        ]);
    }

    public function adminTampilBerita($id)
    {
        return view('DetailBerita', [
            'data' => Artikel::find($id)
        ]);
    }

    // post function
    public function adminTambahProker(Request $request)
    {
        $validate = $request->validate([
            'judulAgenda' => 'required',
            'tanggalAgenda' => 'required',
            'deskripsi' => 'required',
            "periode" => 'required'
        ]);

        $validate['progressAgenda'] = 0;

        // $validate['masalah'] = '';

        // dd($validate);

        Agenda::create($validate);

        return redirect('/admin/dashboard')->with("success", "proker berhasil ditambahkan");
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

        return redirect('/admin/dashboard')->with("success", "anggota berhasil ditambah");
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

        return redirect('/admin/dashboard')->with("success", "komisariat berhasil ditambah");
    }

    // put function
    public function validasiBerita($id)
    {
        // dd(Artikel::find($id));
        Artikel::where('id', $id)->update([
            'status' => 'acc',
        ]);


        return redirect('/admin/dashboard')->with("success", "berita telah di acc");
    }

    public function adminProkerEdit(Request $request, $id)
    {
        // dd($request);

        $update = $request->validate([
            'judulAgenda' => 'required',
            'deskripsi' => 'required',
            'masalah' => 'required',
            'tanggalAgenda' => 'required',
            'periode' => 'required|integer',
            'progressAgenda' => 'required|integer|min:0|max:100'
        ]);

        // dd($update);

        // dd($update);

        Agenda::where('id', $id)->update($update);

        return redirect('/admin/dashboard')->with("success", "proker berhasil di edit");
    }

    public function adminKomisariatEdit(Request $request, $id)
    {
        $update = $request->validate([
            'nokomisariat' => 'required',
            'namaKomisariat' => 'required',
            'tahunBerdiri' => 'required|integer',
            'status' => 'required',
            'angkatan' => 'required|integer'
        ]);

        Komisariat::where("id", $id)->update($update);

        return redirect('/admin/dashboard')->with("success", "komisariat berhasil di edit");
    }

    public function adminEditDataAnggota(Request $request, $id)
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

        return redirect('admin/dashboard')->with("success", "data anggota berhasil di edit");
    }

    public function adminDeleteKomisariat($id)
    {
        Komisariat::find($id)->delete();

        return redirect('/admin/dashboard')->with("success", "komisariat telah dihapus");
    }
    public function adminDeleteAnggota($id)
    {
        Anggota::find($id)->delete();

        return redirect('/admin/dashboard')->with("success", "anggota berhasil dihapus");
    }

    public function prokerHapus($id)
    {
        Agenda::find($id)->delete();

        return redirect('/admin/dashboard')->with("success", "proker telah dihapus");
    }
}
