<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Anggota;
use App\Models\User;
use App\Models\Komisariat;
use App\Models\Agenda;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ControllerAnggota extends Controller
{
    public function index()
    {
        return view('Anggota.DashboardAnggota', [
            'data' => Agenda::where('periode', 2023)->get(),
            'komisariat' => Komisariat::get()
        ]);
    }

    public function controlBerita()
    {
        return view('Anggota.ControlBerita', [
            'data' => Artikel::latest()->get()
        ]);
    }

    public function addBerita()
    {
        return view('Anggota.AddBerita');
    }
    public function beritaEdit($id)
    {
        return view('Anggota.EditBerita', [
            'data' => Artikel::find($id)
        ]);
    }

    // menampilkan data anggota
    public function listAnggota($id)
    {
        return view('DataAnggota', [
            'data' => Anggota::where('komisariat_id', $id)->get()
        ]);
    }

    public function komisariat()
    {
        return view('ListKomisariat', [
            'data' => Komisariat::get()
        ]);
    }

    public function profileSet($id)
    {
        $data = User::find($id);
        return view("Anggota.ProfileSettingAnggota", [
            'data' => User::find($id)
        ]);
    }

    // list proker
    public function proker()
    {
        return view('ProkerCek');
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
            'berita',
            $request->user()->id . '_fotoberita_' . $id . '.jpg'
        );


        return redirect('/anggota/dashboard')->with("success", "berita berhasil ditambahkan");
    }

    public function profileEdit(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'exclude_if:password,null'
        ]);

        if ($request->password !== null) {

            $validate['password'] = bcrypt($validate['password']);
        }

        if ($request->hasFile('photo')) {
            // ...
            $request->file('profile')->storeAs(
                'profil',
                'foto-profil' . $request->user()->id . '.jpg'
            );
        }

        User::where('id', $id)->update($validate);

        return redirect('/anggota/dashboard')->with("success", "profile berhasil di update");
    }

    public function editBerita(Request $request, $id)
    {
        $update = $request->validate([
            'judul' => 'required',
            'isiBerita' => 'required'
        ]);

        $update['status'] = 'tunda';

        // dd($update);

        Artikel::where('id', $id)->update($update);

        if ($request->hasFile('image')) {
            $request->file('image')->storeAs(
                'berita',
                $request->user()->id . '_fotoberita_' . $id . '.jpg'
            );
        }

        return redirect('/anggota/dashboard')->with("success", "berita berhasil di edit");
    }

    public function hapusBerita($id)
    {
        Artikel::find($id)->delete();

        return redirect('/anggota/dashboard')->with("success", "berita berhasil di hapus");
    }
}
