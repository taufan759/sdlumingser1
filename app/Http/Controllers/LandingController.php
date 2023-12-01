<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Saving;
use App\Models\Categories;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('pages.home');
    }

    public function profilSekolah()
    {
        return view('pages.profilSekolah');
    }

    public function profilKepsek()
    {
        $kepsek = Teacher::where('role', 1)->get();
        return view('pages.profilKepsek',[
            'kepsek' => $kepsek
        ]);
    }

    public function profilStaff()
    {
        $guru = Teacher::where('role', 2)->get();
        $staff = Teacher::where('role', 3)->get();
        return view('pages.profilStaff',[
            'guru' => $guru,
            'staff' => $staff
        ]);
    }

    public function galery()
    {
        $galery = News::orderBy('id', 'DESC')->get();
        return view('pages.galery', [
            'galery' => $galery
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function news()
    {
        $news = News::orderBy('id', 'DESC')->get();;
        return view('pages.news',[
            'news' =>  $news
        ]);
    }

    public function show($id_title)
    {
        $show = News::find($id_title);
        return view('pages.show', $show);
    }

    public function login()
    {
        return view('pages.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('handleRoles');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function handleRoles() {
        if (Auth::check()) {
            $role = auth()->user()->role;
            if ($role == 1) {
                return redirect('/guru/dashboard')->with('success', 'Masuk Sebagai Guru!');
            } else {
                return redirect('/siswa/dashboard')->with('success', 'Masuk Sebagai Siswa!');
            }
        }
    }
}
