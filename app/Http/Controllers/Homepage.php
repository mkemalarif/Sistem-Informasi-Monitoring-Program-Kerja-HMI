<?php

namespace App\Http\Controllers;


use App\Models\Agenda;
use App\Models\Anggota;
use App\Models\Artikel;
use App\Models\Komisariat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Homepage extends Controller
{
  public function index()
  {

    return view('HomePage', [
      'data' => Artikel::where('status', 'acc')->get(),
      'komisariat' => Komisariat::count(),
      'anggota' => Anggota::count()
    ]);
  }

  public function newIndex()
  {
    return view('HomePage');
  }
}
