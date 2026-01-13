<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // cek user login
        if (!auth()->check()) {
            return redirect('/')->with('error', 'Silahkan login terlebih dahulu.');
        }

        // cek role user
        if (auth()->user()->role !== $role) {
            return redirect('/dashboard')->with('error', 'Akses ditolak!');
        }

        return $next($request);
    }
}
