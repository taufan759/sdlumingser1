<?php

namespace App\Http\Middleware;

use App\Models\Siswa;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class profilSiswa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user()->id;
        $teacher = Siswa::where('users_id', $user)->first();

        if (!$teacher &&  auth()->user()->roles != 1) {
                return redirect()->back()->with('success', 'Lengkapi Terlebih dahulu Profil Anda.');
        }
        return $next($request);
    }
}
