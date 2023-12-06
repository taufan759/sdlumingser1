<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

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

    public function updateProfil(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'nip' => 'required|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'no_tlp' => 'nullable|string|max:20',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'NIP' => $request->nip,
            'jabatan' => $request->jabatan,
            'alamat_lengkap' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
    public function teacher()
    {
        return view('guru.teacher');
    }

    public function storeTeacher(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'nip' => 'required|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'no_tlp' => 'nullable|string|max:20',
            'password' => 'nullable|string|min:8|confirmed',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ],
        [
            'nama.required' => 'Kolom Nama tidak boleh kosong',
            'email.required' => 'Kolom Email tidak boleh kosong',
            'nip.required' => 'Kolom NIP tidak boleh kosong',
            'jabatan.required' => 'Kolom Jabatan tidak boleh kosong',
            'alamat.required' => 'Kolom Alamat tidak boleh kosong',
            'no_tlp.required' => 'Kolom Nomor Telepon tidak boleh kosong',
            'password.required' => 'Kolom password tidak boleh kosong',
            'image.required' => 'Tipe file harus JPEG,PNG,JPG,GIF,SVG & Tidak lebih dari 10MB',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = 'image' . date('Ymd') . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/image/' . $filename);
        }

        Teacher::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_telp,
            'password' => $request->password,
            'image' => $request->image,
        ]);


    }
   
   
}
