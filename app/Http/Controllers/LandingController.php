<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Saving;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Achievement;
use App\Models\Categories;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
public function home()
{
    // Ambil 3 berita terbaru
    $news = News::latest()->limit(3)->get();

    // Ambil 3 foto terbaru
    $photos = Photo::latest()->limit(3)->get();

    // Ambil 3 video terbaru
    $videos = Video::latest()->limit(3)->get();

    // Kirim data berita, foto, dan video ke view
    return view('pages.home', compact('news', 'photos', 'videos'));
}


public function dataPokok()
{
    $schoolData = [
        'name' => 'SD Negeri Lumingser 01',
        // Tambahkan data lainnya jika diperlukan
    ];
    return view('pages.datasekolah', compact('schoolData'));
}

public function visiMisi()
{
    return view('pages.visimisi');
}

    public function profilKepsek()
    {
        $kepsek = Teacher::where('roles', 1)->get();
        return view('pages.profilKepsek', [
            'kepsek' => $kepsek,
        ]);
    }

    public function profilStaff()
    {
        $kepsek = Teacher::where('roles', 1)->get();
        $guru = Teacher::where('roles', 2)->get();
        $staff = Teacher::where('roles', 3)->get();
        return view('pages.profilStaff', [
            'guru' => $guru,
            'kepsek' => $kepsek,
            'staff' => $staff,
        ]);
    }

    public function galery()
{
    $galery = News::with('category')
        ->where('status', 1)
        ->orderBy('id', 'DESC')
        ->limit(6)
        ->get();

    $photos = Photo::all()->groupBy('title');
    $videos = Video::all();

    return view('pages.galery', [
        'galery' => $galery,
        'photos' => $photos,
        'videos' => $videos,
    ]);
}


    public function prestasi()
    {
        $achievements = Achievement::latest()->get();
        return view('pages.prestasi', compact('achievements'));
    }

    // Method untuk menampilkan detail prestasi
    public function detailPrestasi($id)
    {
        $achievement = Achievement::findOrFail($id);
        return view('pages.detail-prestasi', compact('achievement'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function kepalasekolah()
    {
        return view('pages.kepalasekolah');
    }

    public function sejarah()
    {
        return view('pages.sejarah');
    }

    public function struktur()
    {
        return view('pages.struktur');
    }

    public function news()
    {
        $newsRandom = News::where('status', 1)->inRandomOrder()->get();
        $latesNews = News::where('status', 1)->inRandomOrder()->limit(10)->get();
        $newsAll = News::where('status', 1)->orderBy('id', 'DESC')->get();        
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
        return view('pages.show', [
            'show' => $show,
            'categories' => $categories,
            'author' => $author,
        ]);
    }

    public function login()
    {
        if (auth()->check()) {
            return redirect()->intended('handleRoles');
        }
        return view('pages.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);

        $field = filter_var($credentials['login'], FILTER_VALIDATE_EMAIL)
            ? 'email'
            : (is_numeric($credentials['login'])
                ? (strlen($credentials['login']) > 15 ? 'NIP' : (strlen($credentials['login']) < 15 ? 'NIS' : 'invalid'))
                : 'email'
            );

        if ($field === 'invalid') {
            return back()
                ->withErrors([
                    'login' => 'Invalid login credentials.',
                ])
                ->onlyInput('login');
        }

        $credentials[$field] = $credentials['login'];
        unset($credentials['login']);

        if (Auth::attempt($credentials)) {
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
