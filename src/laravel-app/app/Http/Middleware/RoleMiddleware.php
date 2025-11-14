<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Cek dulu apakah user sudah login
        if (!Auth::check()) {
            abort(403, 'Anda Belum login');
        }

        // Cek apakah peran user sesuai dengan yang diminta
        if (Auth::user()->role->name !== $role) {
            abort(403, 'Anda tidak memiliki Akses Peran tidak sesuai');
        }

        // Jika kedua cek lolos, lanjutkan permintaan
        return $next($request);
    }
}
