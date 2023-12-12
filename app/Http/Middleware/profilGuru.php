<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class profilGuru
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user()->id;
        $teacher = Teacher::where('users_id', $user)->first();

        if (!$teacher &&  auth()->user()->roles != 1) {
                return redirect('/guru/profil')->with('success', 'Lengkapi Terlebih dahulu Profil Anda.');
        }
        return $next($request);
    }
}
