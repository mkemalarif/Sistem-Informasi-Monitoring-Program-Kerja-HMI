<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda;

class ControllerKetua extends Controller
{
    public function index()
    {
        return view('Ketua.DashboardKetua', [
            'data' => Agenda::latest()->get()
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

    public function ketuaTambahProker(Request $request)
    {
        $validate = $request->validate([
            'judulAgenda' => 'required',
            'tanggalAgenda' => 'required',
            'progressAgenda' => 'required|min:0|max:100'
        ]);

        // dd($validate);

        Agenda::create($validate);

        return redirect('/ketua/dashboard');
    }
}
