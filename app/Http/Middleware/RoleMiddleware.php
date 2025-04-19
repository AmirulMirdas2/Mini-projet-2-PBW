<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Periksa apakah pengguna sudah login
        if (!Auth::check()) {
            return redirect('/sesi')->withErrors('Silahkan login untuk mengakses halaman.');; // Redirect ke halaman login jika belum login
        }

        // Periksa apakah pengguna memiliki peran yang sesuai
        if (Auth::user()->role !== $role) {
            return redirect('/sesi')->withErrors('Silahkan login untuk mengakses halaman.');; // Redirect ke halaman login jika peran tidak sesuai
        }

        return $next($request);
    }
}
