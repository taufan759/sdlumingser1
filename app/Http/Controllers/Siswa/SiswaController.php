<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $user = auth()->user()->id;
        $siswa = Siswa::where('users_id', $user)->first();
        return view('siswa.index', [
            'siswa' => $siswa,
        ]);
    }

    public function StoreProfil(Request $request)
    {
        // Validate the form data
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'nama_siswa' => 'required|string',
            'tempat_tanggal_lahir_siswa' => 'nullable|string',
            'kelas' => 'nullable|string',
            'alamat_lengkap' => 'nullable|string',
            'nama_ibu' => 'nullable|string',
            'nama_ayah' => 'nullable|string',
            'foto_kk' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'no_tlp' => 'nullable|string',
            'kelamin' => 'nullable|in:L,P',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = 'siswa' . '-' . Str::random(10) . '-' . date('Ymd') . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/', $filename);
        }

        if ($request->hasFile('foto_kk')) {
            $fotoKK = $request->file('foto_kk');
            $filenameKK = 'kk' . '-' . Str::random(10) . '-' . date('Ymd') . '.' . $fotoKK->getClientOriginalExtension();
            $fotoKK->storeAs('public/', $filenameKK);
        }
        $user = auth()->user()->id;
        $NIS = auth()->user()->NIS;
        $siswa = new Siswa([
            'users_id' => $user,
            'image' => $filename ?? null,
            'NIS' => $NIS,
            'nama_siswa' => $request->input('nama_siswa'),
            'tempat_tanggal_lahir_siswa' => $request->input('tempat_tanggal_lahir_siswa'),
            'alamat_lengkap' => $request->input('alamat_lengkap'),
            'kelas' => $request->input('kelas'),
            'nama_ibu' => $request->input('nama_ibu'),
            'nama_ayah' => $request->input('nama_ayah'),
            'foto_kk' => $filenameKK ?? null,
            'no_tlp' => $request->input('no_tlp'),
            'kelamin' => $request->input('kelamin'),
        ]);

        // Save the Siswa instance to the database
        $siswa->save();

        // Redirect with a success message
        return redirect()->back()->with('success', 'Data siswa berhasil disimpan');
    }
}
