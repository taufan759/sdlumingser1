<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Siswa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->role != 2) {
            if(auth()->user()->role == 1) {
                return redirect()->back()->with('message', 'Errors!! Anda Mencoba Akses permission Siswa.');
            } 
        }
        return $next($request);
    }
}
