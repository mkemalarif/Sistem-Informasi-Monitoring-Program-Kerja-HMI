<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda;
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
        return view('Ketua.AnggotaAddakun');
    }

    public function programKerja()
    {
        return view('Admin.ProkerAdd');
    }

    public function dataAnggota($id)
    {
        return view('DataAnggota', [
            'data' => Anggota::where('komisariat_id', $id)->get()
        ]);
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
            'tanggalAgenda' => 'required',
            ''
        ]);
    }
}
