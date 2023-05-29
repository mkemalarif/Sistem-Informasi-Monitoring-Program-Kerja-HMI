<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.LoginPage');
    }

    public function authenticate(Request $request, User $user)
    {
        $credentials = $request->validate([
            'username' => "required",
            "password" => "required"
        ]);



        if (Auth::attempt([
            'username' => $credentials['username'],
            'password' => $credentials['password'],
            'jenisAkun' => 'anggota'
        ])) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard-anggota');
        }

        if (Auth::attempt([
            'username' => $credentials['username'],
            'password' => $credentials['password'],
            'jenisAkun' => 'admin'
        ])) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard-admin');
        }

        if (Auth::attempt([
            'username' => $credentials['username'],
            'password' => $credentials['password'],
            'jenisAkun' => 'ketua'
        ])) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard-ketua');
        }

        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
