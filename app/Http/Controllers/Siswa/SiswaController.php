<?php

namespace App\Http\Controllers\Siswa;

use App\Models\User;
use App\Models\Siswa;
use App\Models\Saving;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tugas;
use Illuminate\Support\Facades\Storage;

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
        return redirect()
            ->back()
            ->with('success', 'Data siswa berhasil disimpan');
    }

    public function edit($id)
    { 
        $siswa = Siswa::find($id)->first();
        return view('siswa.edit-profil', [
            'siswa' => $siswa,
        ]);
    }

    public function updateProfil(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable',
            'nama_siswa' => 'required|string',
            'tempat_tanggal_lahir_siswa' => 'nullable|string',
            'kelas' => 'nullable|string',
            'alamat_lengkap' => 'nullable|string',
            'nama_ibu' => 'nullable|string',
            'nama_ayah' => 'nullable|string',
            'foto_kk' => 'nullable',
            'no_tlp' => 'nullable|string',
            'kelamin' => 'nullable|in:L,P',
        ]);

        $siswa = Siswa::find($id)->first();
        if ($request->hasFile('image')) {
            if ($siswa->image) {
                Storage::delete('public/' . $siswa->image);
            }

            $image = $request->file('image');
            $filename = 'siswa' . '-' . Str::random(10) . '-' . date('Ymd') . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/', $filename);
            $siswa->image = $filename;
        }
        if ($request->hasFile('foto_kk')) {
            if ($siswa->foto_kk) {
                Storage::delete('public/' . $siswa->foto_kk);
            }

            $fotoKK = $request->file('foto_kk');
            $filenameKK = 'kk' . '-' . Str::random(10) . '-' . date('Ymd') . '.' . $fotoKK->getClientOriginalExtension();
            $fotoKK->storeAs('public/', $filenameKK);
            $siswa->foto_kk = $filenameKK;
        }

        $user = auth()->user();
        $siswa->users_id = $user->id;
        $siswa->NIS = $user->NIS;
        $siswa->nama_siswa = $request->input('nama_siswa');
        $siswa->tempat_tanggal_lahir_siswa = $request->input('tempat_tanggal_lahir_siswa');
        $siswa->alamat_lengkap = $request->input('alamat_lengkap');
        $siswa->kelas = $request->input('kelas');
        $siswa->nama_ibu = $request->input('nama_ibu');
        $siswa->nama_ayah = $request->input('nama_ayah');
        $siswa->no_tlp = $request->input('no_tlp');
        $siswa->kelamin = $request->input('kelamin');
        $siswa->save();
        return redirect('/siswa/dashboard')
            ->with('success', 'Data siswa berhasil diperbarui');
    }

    public function saving()
    {
        $savingID = auth()->user()->id;
        $siswa = User::where('id', $savingID)->first();
        $profil = Siswa::where('users_id', $siswa->id)->first();
        $saving = Saving::where('users_id', $siswa->id)->get();
        $menabungCount = $saving->where('jenis_transaksi', 1)->count();
        $menarikCount = $saving->where('jenis_transaksi', 2)->count();

        return view('siswa.saving', [
            'saving' => $saving,
            'siswa' => $siswa,
            'profil' => $profil,
            'menabungCount' => $menabungCount,
            'menarikCount' => $menarikCount,
        ]);
    }

    public function nilai()
    {
        return view('siswa.nilai');
    }

    public function tugas()
    {
        $siswa = auth()->user(); // Mengambil data siswa yang sedang login
        $tugasSiswa = Tugas::where('users_id', $siswa->id)->get(); // Menampilkan tugas berdasarkan ID siswa

        return view('siswa.tugas', [
            'tugasSiswa' => $tugasSiswa,
            'siswa' => $siswa,
        ]);
    }

    // Menampilkan detail tugas
    public function tugasDetail($id)
    {
        $siswa = auth()->user(); // Mengambil data siswa yang sedang login
        $tugasSiswa = Tugas::findOrFail($id); // Menampilkan tugas berdasarkan ID

        return view('siswa.detail-tugas', [
            'tugas' => $tugasSiswa,
            'siswa' => $siswa,
        ]);
    }
}