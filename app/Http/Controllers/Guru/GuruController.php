<?php

namespace App\Http\Controllers\Guru;

use App\Models\News;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Siswa;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('guru.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function settings()
    {
        return view('guru.settings');
    }

    public function profil()
    {
        $user = auth()->user()->id;
        $teacher = Teacher::where('users_id', $user)->first();
        return view('guru.profil', [
            'teacher' => $teacher
        ]);
    }

    public function StoreProfil(Request $request)
    {
        $request->validate(
            [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
                'title' => 'required|string|max:255',
                'nama' => 'required|string|max:255',
                'roles' => 'required|string|max:255',
                'jabatan' => 'nullable|string|max:255',
                'alamat' => 'nullable|string|max:255',
                'no_tlp' => 'nullable|string|max:20',
            ],
            [
                'nama.required' => 'Kolom Nama tidak boleh kosong',
                'image.required' => 'Tipe file harus JPEG, PNG, JPG, GIF, SVG & tidak lebih dari 10MB',
                'roles.required' => 'Harap pilih peran (roles) untuk guru',
            ],
        );
        $user = auth()->user();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = 'guru' . '-' . Str::random(10) . '-' . date('Ymd') . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/' . $filename);
        }

        Teacher::create([
            'image' => $filename,
            'users_id' => $user->id,
            'title' => $request->title,
            'nama' => $request->nama,
            'roles' => $request->roles,
            'NIP' => $user->NIP,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
        ]);
        return redirect()
            ->back()
            ->with('success', 'Data Guru berhasil ditambahkan.');
    }

    public function updateAkun(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()
            ->back()
            ->with('success', 'Akun updated successfully.');
    }
    public function akunTeacher()
    {
        $guru = User::where('roles', 2)->get();
        return view('guru.AkunTeacher', [
            'guru' => $guru,
        ]);
    }
    public function insertAkunTeacher(Request $request)
    {
        $user = auth()->user();

        $request->validate(
            [
                'nama' => 'required|string|max:255',
                'email' => ['string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
                'nip' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
                'password' => 'nullable|string|min:8',
            ],
            [
                'nama.required' => 'Kolom Nama tidak boleh kosong',
                'nip.required' => 'Kolom NIP tidak boleh kosong',
                'nip.unique' => 'NIP sudah terdaftar',
                'email.unique' => 'Email sudah terdaftar',
                'password.min' => 'Password harus memiliki minimal 8 karakter',
            ],
        );

        $user->create([
            'nama' => $request->nama,
            'email' => $request->email,
            'roles' => 2,
            'NIP' => $request->nip,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()
            ->back()
            ->with('success', 'Akun Guru berhasil ditambahkan.');
    }

    public function teacher()
    {
        $guruUsers = User::where('roles', 2)->get();
        $guru = Teacher::orderBy('id', 'DESC')->get();

        return view('guru.teacher', [
            'guruUsers' => $guruUsers,
            'guru' => $guru,
        ]);
    }

    public function insertTeacher(Request $request)
    {
        $request->validate(
            [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
                'users_id' => 'required|string|max:255|unique:teacher,users_id', // Add unique rule
                'title' => 'required|string|max:255',
                'nama' => 'required|string|max:255',
                'roles' => 'required|string|max:255',
                'nip' => 'required|string|max:255',
                'jabatan' => 'nullable|string|max:255',
                'alamat' => 'nullable|string|max:255',
                'no_tlp' => 'nullable|string|max:20',
            ],
            [
                'nama.required' => 'Kolom Nama tidak boleh kosong',
                'nip.required' => 'Kolom NIP tidak boleh kosong',
                'image.required' => 'Tipe file harus JPEG, PNG, JPG, GIF, SVG & tidak lebih dari 10MB',
                'roles.required' => 'Harap pilih peran (roles) untuk guru',
                'users_id.unique' => 'ID akun sudah digunakan',
            ],
        );

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = 'guru' . '-' . Str::random(10) . '-' . date('Ymd') . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/' . $filename);
        }

        Teacher::create([
            'image' => $filename,
            'users_id' => $request->users_id,
            'title' => $request->title,
            'nama' => $request->nama,
            'roles' => $request->roles,
            'NIP' => $request->nip,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
        ]);
        return redirect()
            ->back()
            ->with('success', 'Data Guru berhasil ditambahkan.');
    }

    public function ShowDataTeacher($id, $nama_siswa)
    {
        $detail = Teacher::where('id', $id)->first();
        return view('guru.detail_data_guru', [
            'detail' => $detail
        ]);
    }

    public function berita()
    {
        $berita = News::orderBy('id', 'DESC')->get();
        return view('guru.berita', [
            'berita' => $berita,
        ]);
    }

    public function Insertberita()
    {
        $categories = Categories::all();

        return view('guru.InsertBerita', [
            'categories' => $categories,
        ]);
    }

    public function StoreBerita(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|',
        ]);

        $user = auth()->user();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = 'Berita' . '-' . Str::random(10) . '-' . date('Ymd') . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/' . $filename);
        }
        $news = new News([
            'id_title' => Str::slug($request['title'], '-'),
            'title' => $validatedData['title'],
            'image' => $filename,
            'content' => $validatedData['content'],
            'status' => 2,
            'author_id' => $user->id,
            'category_id' => $validatedData['category_id'],
        ]);
    
        $news->save();
        return redirect('/guru/berita')->with('success', 'Berita berhasil disimpan!');
    }
    public function publish($id)
    {
        $news = News::find($id);
        $title = $news->title;
        $news->update([
            'status' => 1,
        ]);
        return redirect()
            ->back()
            ->with('success', $title. ' Berhasil dipublish.');
    }

    public function draft($id)
    {
        $news = News::find($id);
        $title = $news->title;
        $news->update([
            'status' => 2,
        ]);
        return redirect()
            ->back()
            ->with('success', $title. ' Berhasil disimpan didraft.');
    }

    public function categories()
    {
        $categories = Categories::all();
        return view('guru.categories', [
            'categories' => $categories,
        ]);
    }

    public function StoreCategories(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = new Categories([
            'name' => $validatedData['name'],
        ]);

        $category->save();

        return redirect()->back()->with('success', 'Category successfully created!');
    }

    public function siswa()
    {
        $siswa = User::where('roles', 3)->get();
        return view('guru.siswa', [
            'siswa' => $siswa
        ]);
    }

    public function StoreSiswaAccount(Request $request)
    {
        $user = auth()->user();

        $request->validate(
            [
                'nama' => 'required|string|max:255',
                'nis' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
                'password' => 'nullable|string|min:8',
            ],
            [
                'nama.required' => 'Kolom Nama tidak boleh kosong',
                'nis.required' => 'Kolom NIP tidak boleh kosong',
                'nis.unique' => 'NIP sudah terdaftar',
                'password.min' => 'Password harus memiliki minimal 8 karakter',
            ],
        );

        $user->create([
            'nama' => $request->nama,
            'roles' => 3,
            'NIS' => $request->nip,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()
            ->back()
            ->with('success', 'Akun Siswa berhasil ditambahkan.');
    }

    public function DataSiswa()
    {
        $siswa = Siswa::orderBy('id', 'DESC')->get();
        return view('guru.data_siswa', [
            'siswa' => $siswa
        ]);
    }

    public function ShowDataSiswa($id, $nama_siswa)
    {
        $detail = Siswa::where('id', $id)->first();
        return view('guru.detail_data_siswa', [
            'detail' => $detail
        ]);
    }
}
