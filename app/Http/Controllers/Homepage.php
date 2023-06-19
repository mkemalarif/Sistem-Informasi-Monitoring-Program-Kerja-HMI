<?php

namespace App\Http\Controllers;


use App\Models\Agenda;
use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Homepage extends Controller
{
  public function index()
  {
    return view('HomePage', [
      'data' => Artikel::where('status', 'acc')->get()
    ]);
  }

  public function newIndex()
  {
    return view('HomePage');
  }
}
