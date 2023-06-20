<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class notLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {

            return $next($request);
        } else if (auth()->user()->jenisAkun === 'admin') {
            return redirect('/admin/dashboard');
        } else if (auth()->user()->jenisAkun === 'ketua') {
            return redirect('/ketua/dashboard');
        } else if (auth()->user()->jenisAkun === 'anggota') {
            return redirect('/anggota/dashboard');
        }
    }
}
