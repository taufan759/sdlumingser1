<?php

namespace App\Http\Controllers\Guru;

use App\Models\News;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Saving;
use App\Models\Teacher;
use App\Models\Categories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function dashboard()
    {
        $sumSaldo = User::where('roles', 3)->sum('saldo');
        $siswa = User::where('roles', 3)->count();
        $guru = User::where('roles', 2)->count();
        return view('guru.dashboard', [
            'saldo' => $sumSaldo,
            'siswa' => $siswa,
            'guru' => $guru,
        ]);
    }

    public function settings()
    {
        return view('guru.settings');
    }

    public function profil()
    {
        $user = auth()->user()->id;
        $teacher = Teacher::where('users_id', $user)->first();
        return view('guru.profil', [
            'teacher' => $teacher,
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
            'nip' => 'nullable',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'NIP' => $request->nip,
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
                'email' => ['nullable', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
                'nip' => ['nullable', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
                'password' => 'nullable|string|min:8',
            ],
            [
                'nama.required' => 'Kolom Nama tidak boleh kosong',
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
                'users_id.unique' => 'Akun akun sudah digunakan',
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
            'detail' => $detail,
        ]);
    }

    public function berita()
    {
        $berita = News::orderBy('id', 'DESC')->get();
        return view('guru.berita', [
            'berita' => $berita,
        ]);
    }

    public function editProfilGuru($id)
    {
        $teacher = Teacher::where('id', $id)->first();
        return view('guru.edit_profil', [
            'teacher' => $teacher,
        ]);
    }

    public function updatedProfilGuru(Request $request, $id)
    {
        //dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'roles' => 'required|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'no_tlp' => 'nullable|string|max:20',
        ]);

        $teacher = Teacher::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($teacher->image) {
                Storage::delete('public/' . $teacher->image);
            }
            $image = $request->file('image');
            $filename = 'guru' . '-' . Str::random(10) . '-' . date('Ymd') . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/' . $filename);
            $teacher->image = $filename;
        } else {
            $filename = $teacher->image;
        }

        $user = auth()->user();
        $teacher->title = $request->title;
        $teacher->users_id = $user->id;
        $teacher->nama = $request->nama;
        $teacher->roles = $request->roles;
        $teacher->NIP = $user->NIP;
        $teacher->jabatan = $request->jabatan;
        $teacher->alamat = $request->alamat;
        $teacher->no_tlp = $request->no_tlp;

        $teacher->save();

        return redirect('/guru/profil')
            ->with('success', 'Data Guru berhasil diupdate.');
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
            ->with('success', $title . ' Berhasil dipublish.');
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
            ->with('success', $title . ' Berhasil disimpan didraft.');
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

        return redirect()
            ->back()
            ->with('success', 'Category successfully created!');
    }

    public function siswa()
    {
        $siswa = User::where('roles', 3)->get();
        return view('guru.siswa', [
            'siswa' => $siswa,
        ]);
    }

    public function deleteCategory($id)
    {
        try {
            $category = Categories::findOrFail($id);
            $category->delete();
            return redirect()->back()->with('success', 'Category deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting category: ' . $e->getMessage());
        }
    }
    public function deleteBerita($id)
    {
        try {
            $category = News::findOrFail($id);
            $category->delete();
            return redirect()->back()->with('success', 'Category deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting category: ' . $e->getMessage());
        }
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
                'nis.unique' => 'NIS sudah terdaftar',
                'password.min' => 'Password harus memiliki minimal 8 karakter',
            ],
        );

        $user->create([
            'nama' => $request->nama,
            'roles' => 3,
            'NIS' => $request->nis,
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
            'siswa' => $siswa,
        ]);
    }

    public function ShowDataSiswa($id, $nama_siswa)
    {
        $detail = Siswa::where('id', $id)->first();
        return view('guru.detail_data_siswa', [
            'detail' => $detail,
        ]);
    }

    public function saving()
    {
        $saving = Saving::all();
        $siswa = User::where('roles', 3)->get();
        $sumSaldo = User::where('roles', 3)->sum('saldo');
        return view('guru.saving', [
            'siswa' => $siswa,
            'saving' => $saving,
            'sumSaldo' => $sumSaldo,
        ]);
    }
    public function savingDetail($id)
    {
        $savingID = Saving::find($id);
        $siswa = User::where('id', $savingID->users_id)->first();
        $profil = Siswa::where('users_id', $siswa->id)->first();
        $saving = Saving::where('users_id', $siswa->id)->get();
        $menabungCount = $saving->where('jenis_transaksi', 1)->count();
        $menarikCount = $saving->where('jenis_transaksi', 2)->count();

        return view('guru.detail-saving', [
            'saving' => $saving,
            'siswa' => $siswa,
            'profil' => $profil,
            'menabungCount' => $menabungCount,
            'menarikCount' => $menarikCount,
        ]);
    }

    public function storeSaving(Request $request)
    {
        $request->validate(
            [
                'users_siswa' => 'required',
                'jenis_transaksi' => 'required',
                'saldo_transaksi' => 'required',
                'keterangan' => 'nullable',
            ],
            [
                'users_siswa.required' => 'Siswa Belum Dipilih',
                'jenis_transaksi.required' => 'Jenis Transaksi Error Value',
                'saldo_transaksi.required' => 'Saldo Belum Ditambahkan',
            ],
        );

        $user = auth()->user()->id;
        $siswa = User::where('id', $request->users_siswa)->first();
        $saldo_user = $siswa->saldo;
        if ($request->jenis_transaksi == 1) {
            $saldo_final = $saldo_user + $request->saldo_transaksi;
            $jenis = 'Ditambah';
        } else {
            if ($request->saldo_transaksi > $saldo_user) {
                return redirect()
                    ->back()
                    ->with('error', 'Saldo tidak cukup');
            } else {
                $saldo_final = $saldo_user - $request->saldo_transaksi;
                $jenis = 'Ditarik';
            }
        }

        $siswa->update([
            'saldo' => $saldo_final,
        ]);

        $saving = new Saving([
            'users_id' => $request->users_siswa,
            'authors_id' => $user,
            'saldo_user' => $saldo_final,
            'jenis_transaksi' => $request->jenis_transaksi,
            'saldo_transaksi' => $request->saldo_transaksi,
            'saldo_final' => $saldo_final,
            'keterangan' => $request->keterangan,
        ]);
        $saving->save();
        return redirect()
            ->back()
            ->with('success', 'Tabungan berhasil ' . $jenis . ' untuk ' . $siswa->nama . ' sejumlah Rp. ' . number_format($request->saldo_transaksi, 0, ',', ','));
    }
}
