<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ControllerAnggota extends Controller
{
    public function index()
    {
        return view('DashboardAnggota');
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
            'berita',
            $request->user()->id . '_fotoberita_' . $id . '.jpg'
        );


        return redirect('/anggota/dashboard');
    }

    // menampilkan data anggota
    public function listAnggota()
    {
        return view('DataAnggota', [
            'data' => Anggota::get()
        ]);
    }

    // list proker
    public function proker()
    {
        return view('ProkerCek');
    }

    public function profileSet($id)
    {
        $data = User::find($id);
        return view("Anggota.ProfileSettingAnggota", [
            'data' => User::find($id)
        ]);
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

        // if ($request->hasFile('profile')) {

        // dd($request->file('profile'));
        // }

        $request->file('profile')->storeAs(
            'profil',
            'foto-profil' . $request->user()->id . '.jpg'
        );

        User::where('id', $id)->update($validate);

        return redirect('/anggota/dashboard');
    }
}
