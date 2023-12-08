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
        return view('pages.profilKepsek', [
            'kepsek' => $kepsek,
        ]);
    }

    public function profilStaff()
    {
        $kepsek = Teacher::where('role', 1)->get();
        $guru = Teacher::where('role', 2)->get();
        $staff = Teacher::where('role', 3)->get();
        return view('pages.profilStaff', [
            'guru' => $guru,
            'kepsek' => $kepsek,
            'staff' => $staff,
        ]);
    }

    public function galery()
    {
        $galery = News::orderBy('id', 'DESC')->get();
        return view('pages.galery', [
            'galery' => $galery,
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function news()
    {
        $newsRandom= News::inRandomOrder()->limit(1)->get();; 
        $newsAll = News::orderBy('id', 'DESC')->get(); 
        $latesNews = News::orderBy('id', 'DESC')->limit('3')->get(); 
        return view('pages.news', [
            'newsAll' => $newsAll,
            'latesNews' => $latesNews,
            'newsRandom' => $newsRandom,
        ]);
    }

    public function show($id_title)
    {
        $show = News::where('id_title', $id_title)->first();
        $categories = Categories::where('id', $show->category_id)->first();
        $author = User::where('id', $show->author_id)->first();
        return view('pages.show',[
            'show' => $show,
            'categories' => $categories,
            'author' => $author
        ]);
    }

    public function login()
    {
        return view('pages.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);

        $field = filter_var($credentials['login'], FILTER_VALIDATE_EMAIL) ? 'email' : (is_numeric($credentials['login']) ? (strlen($credentials['login']) == 10 ? 'NIS' : 'NIP') : 'email');

        if (Auth::attempt([$field => $credentials['login'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            return redirect()->intended('handleRoles');
        }

        return back()
            ->withErrors([
                'login' => 'The provided credentials do not match our records.',
            ])
            ->onlyInput('login');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function handleRoles()
    {
        if (Auth::check()) {
            $roles = auth()->user()->roles;
            if ($roles == 1) {
                return redirect('/guru/dashboard')->with('success', 'Masuk Sebagai Admin!');
            } elseif ($roles == 2) {
                return redirect('/guru/dashboard')->with('success', 'Masuk Sebagai guru!');
            } else {
                return redirect('/siswa/dashboard')->with('success', 'Masuk Sebagai Siswa!');
            }
        }
    }
}
