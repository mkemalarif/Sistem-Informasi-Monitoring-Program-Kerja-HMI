<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerKetua extends Controller
{
    public function index()
    {
        return view('Ketua.DashboardKetua');
    }

    public function create()
    {
        return view('Ketua.AnggotaAddakun');
    }

    public function programKerja(){
        return view('Admin.ProkerAdd');
    }
}
