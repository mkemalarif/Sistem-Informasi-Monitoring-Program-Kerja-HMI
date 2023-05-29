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
        


        // if (Auth::attempt($credentials)) {

        //     $request->session()->regenerate();

        //     return redirect()->intended('/dashboard');
        // }

        // return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
