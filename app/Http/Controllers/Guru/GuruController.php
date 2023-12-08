<?php

namespace App\Http\Controllers\Guru;

use App\Models\News;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
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

        return redirect()->back()->with('success', 'Akun updated successfully.');
    }
    public function akunTeacher()
    {
        $guru = User::where('roles', 2)->get();
        return view('guru.AkunTeacher', [
            'guru' => $guru
        ]);
    }
    public function insertAkunTeacher(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'nip' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => 'nullable|string|min:8',
        ], [
            'nama.required' => 'Kolom Nama tidak boleh kosong',
            'nip.required' => 'Kolom NIP tidak boleh kosong',
            'nip.unique' => 'NIP sudah terdaftar',
            'email.unique' => 'Email sudah terdaftar',
            'password.min' => 'Password harus memiliki minimal 8 karakter',
        ]);
        

        $user->create([
            'nama' => $request->nama,
            'email' => $request->email,
            'roles' => 2,
            'NIP' => $request->nip,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->back()->with('success', 'Akun Guru berhasil ditambahkan.');
    }

    public function teacher()
    {
        $guruUsers = User::where('roles', 2)->get();
        $guru = Teacher::orderBy('id', 'DESC')->get();

        return view('guru.teacher',[
            'guruUsers' => $guruUsers,
            'guru' => $guru
        ]);
    }

    public function insertTeacher(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'users_id' => 'required|string|max:255|unique:teacher,users_id', // Add unique rule
            'title' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'roles' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'no_tlp' => 'nullable|string|max:20',
        ], [
            'nama.required' => 'Kolom Nama tidak boleh kosong',
            'nip.required' => 'Kolom NIP tidak boleh kosong',
            'image.required' => 'Tipe file harus JPEG, PNG, JPG, GIF, SVG & tidak lebih dari 10MB',
            'roles.required' => 'Harap pilih peran (roles) untuk guru',
            'users_id.unique' => 'ID akun sudah digunakan',
        ]);           

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = 'guru'. '-' .Str::random(10). '-' .date('Ymd') . '.' . $image->getClientOriginalExtension();
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
        return redirect()->back()->with('success', 'Data Guru berhasil ditambahkan.');
    }

    public function berita()
    {
        $berita = News::orderBy('id', 'DESC')->get();
        return view('guru.berita', [
            'berita' => $berita
        ]);
    }

}
