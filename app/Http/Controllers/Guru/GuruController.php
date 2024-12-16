<?php

namespace App\Http\Controllers\Guru;

use App\Models\News;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Saving;
use App\Models\Teacher;
use App\Models\Categories;
use App\Models\Video;
use App\Models\Photo;
use App\Models\Achievement;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\Tugas;
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
    public function updatedAkunTeacher(Request $request, $id)
    {
        $user = User::findOrFail($id);

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

        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'NIP' => $request->nip,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect('/guru/akun-teacher')->with('success', 'Akun Guru berhasil diperbarui.');
    }
    public function updatedAkunSiswa(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate(
            [
                'nama' => 'required|string|max:255',
                'nis' => ['nullable', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
                'password' => 'nullable|string|min:8',
            ],
            [
                'nama.required' => 'Kolom Nama tidak boleh kosong',
                'password.min' => 'Password harus memiliki minimal 8 karakter',
            ],
        );

        $user->update([
            'nama' => $request->nama,
            'NIS' => $request->nis,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect('/guru/siswa')->with('success', 'Akun Siswa berhasil diperbarui.');
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

        return redirect('/guru/profil')->with('success', 'Data Guru berhasil diupdate.');
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
            return redirect()
                ->back()
                ->with('success', 'Category deleted successfully.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Error deleting cate karena akun masih aktif');
        }
    }
    public function deleteBerita($id)
    {
        try {
            $category = News::findOrFail($id);
            $category->delete();
            return redirect()
                ->back()
                ->with('success', 'Category deleted successfully.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Error deleting cate karena akun masih aktif');
        }
    }
    public function deleteAkunTeacher($id)
    {
        try {
            $akunGuru = User::findOrFail($id);
            $akunGuru->delete();
            return redirect()
                ->back()
                ->with('success', 'Guru deleted successfully.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('success', 'Error deleting akun karena akun masih aktif');
        }
    }
    public function deleteSiswa($id)
    {
        try {
            $siswa = Siswa::findOrFail($id);
            $siswa->delete();
            return redirect()
                ->back()
                ->with('success', 'Siswa deleted successfully.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('success', 'Error deleting akun karena akun masih aktif');
        }
    }
    public function deleteTeacher($id)
    {
        try {
            $akunGuru = Teacher::findOrFail($id);
            $akunGuru->delete();
            return redirect()
                ->back()
                ->with('success', 'Guru deleted successfully.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('success', 'Error deleting akun karena akun masih aktif');
        }
    }
    public function deleteAkunSiswa($id)
    {
        try {
            $akunGuru = User::findOrFail($id);
            $akunGuru->delete();
            return redirect()
                ->back()
                ->with('success', 'Siswa deleted successfully.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('success', 'Error deleting akun karena akun masih aktif');
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

    // Controller untuk bagian Photo

public function photo()
{
    $photos = Photo::all(); // Mengambil semua foto
    $totalPhotos = Photo::count(); // Total foto

    return view('guru.photo', [
        'photos' => $photos,
        'totalPhotos' => $totalPhotos,
    ]);
}

// Menyimpan photo baru
public function storePhoto(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'image_path' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $path = $request->file('image_path')->store('photos', 'public');

    Photo::create([
        'title' => $request->title,
        'image_path' => $path,
    ]);

    return redirect()->route('guru.photo')->with('success', 'Photo uploaded successfully!');
}

// Menghapus photo
public function destroyPhoto($id)
{
    $photo = Photo::findOrFail($id);

    // Menghapus file fisik
    if (Storage::disk('public')->exists($photo->image_path)) {
        Storage::disk('public')->delete($photo->image_path);
    }

    $photo->delete();

    return redirect()->route('guru.photo')->with('success', 'Photo deleted successfully!');
}

// Menampilkan halaman edit photo
public function editPhoto($id)
{
    $photo = Photo::findOrFail($id);

    return view('guru.edit-photo', [
        'photo' => $photo,
    ]);
}

// Memperbarui photo
public function updatePhoto(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'image_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $photo = Photo::findOrFail($id);

    if ($request->hasFile('image_path')) {
        // Hapus file lama
        if (Storage::disk('public')->exists($photo->image_path)) {
            Storage::disk('public')->delete($photo->image_path);
        }

        // Simpan file baru
        $path = $request->file('image_path')->store('photos', 'public');
        $photo->image_path = $path;
    }

    $photo->title = $request->title;
    $photo->save();

    return redirect()->route('guru.photo')->with('success', 'Photo updated successfully!');
}

    // Menampilkan halaman video
    public function video()
    {
        $videos = Video::all(); // Mengambil semua video
        $totalVideos = Video::count(); // Total video

        return view('guru.video', [
            'videos' => $videos,
            'totalVideos' => $totalVideos,
        ]);
    }

    // Menyimpan video baru
    public function storeVideo(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'youtube_url' => 'required|url',
        ]);

        Video::create([
            'title' => $request->title,
            'youtube_url' => $request->youtube_url,
        ]);

        return redirect()->route('guru.video')->with('success', 'Video added successfully!');
    }
    // Menampilkan halaman edit video
public function editVideo($id)
{
    $video = Video::findOrFail($id);

    return view('guru.edit-video', [
        'video' => $video,
    ]);
}

// Memperbarui video
public function updateVideo(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'youtube_url' => 'required|url',
    ]);

    $video = Video::findOrFail($id);
    $video->update([
        'title' => $request->title,
        'youtube_url' => $request->youtube_url,
    ]);

    return redirect()->route('guru.video')->with('success', 'Video updated successfully!');
}

// Menghapus video
public function destroyVideo($id)
{
    $video = Video::findOrFail($id);
    $video->delete();

    return redirect()->route('guru.video')->with('success', 'Video deleted successfully!');
}

public function achievements()
{
    $achievements = Achievement::latest()->get();

    return view('guru.achievements', compact('achievements'));
}

public function storeAchievement(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'date' => 'required|date',
        'organizer' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'student_name' => 'required|string|max:255',
        'image_path' => 'nullable|image|max:2048',
    ]);

    $achievement = new Achievement();
    $achievement->title = $request->title;
    $achievement->description = $request->description;
    $achievement->date = $request->date;
    $achievement->organizer = $request->organizer;
    $achievement->location = $request->location;
    $achievement->student_name = $request->student_name;

    if ($request->hasFile('image_path')) {
        $path = $request->file('image_path')->store('achievements', 'public');
        $achievement->image_path = $path;
    }

    $achievement->save();

    return redirect()->route('achievement')->with('success', 'Prestasi berhasil ditambahkan.');
}


public function editAchievement($id)
{
    $achievement = Achievement::findOrFail($id);

    return view('guru.edit-achievements', compact('achievement'));
}

public function updateAchievement(Request $request, $id)
{
    $achievement = Achievement::findOrFail($id);

    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'date' => 'required|date',
        'organizer' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'student_name' => 'required|string|max:255',
        'image_path' => 'nullable|image|max:2048',
    ]);

    $achievement->title = $request->title;
    $achievement->description = $request->description;
    $achievement->date = $request->date;
    $achievement->organizer = $request->organizer;
    $achievement->location = $request->location;
    $achievement->student_name = $request->student_name;

    if ($request->hasFile('image_path')) {
        if ($achievement->image_path && Storage::exists('public/' . $achievement->image_path)) {
            Storage::delete('public/' . $achievement->image_path);
        }
        $path = $request->file('image_path')->store('achievements', 'public');
        $achievement->image_path = $path;
    }

    $achievement->save();

    return redirect()->route('guru.achievement')->with('success', 'Prestasi berhasil diperbarui.');
}

public function destroyAchievement($id)
{
    $achievement = Achievement::findOrFail($id);

    if ($achievement->image_path && Storage::exists('public/' . $achievement->image_path)) {
        Storage::delete('public/' . $achievement->image_path);
    }

    $achievement->delete();

    return redirect()->route('guru.achievement')->with('success', 'Prestasi berhasil dihapus.');
}

public function tugas()
{
    $tugas = Tugas::all(); // Semua tugas
    $kelas = Siswa::select('kelas')->distinct()->get(); // Mengambil daftar kelas unik
    $totalTugas = Tugas::count();

    return view('guru.tugas', [
        'tugas' => $tugas,
        'kelas' => $kelas, // Mengirim daftar kelas ke view
        'totalTugas' => $totalTugas,
    ]);
}


public function tugasDetail($id)
{
    $tugas = Tugas::findOrFail($id);
    $siswa = Siswa::where('kelas', $tugas->kelas)->get(); // Menampilkan siswa berdasarkan kelas

    return view('guru.detail-tugas', [
        'tugas' => $tugas,
        'siswa' => $siswa,
    ]);
}

public function storeTugas(Request $request)
{
    $request->validate([
        'kelas' => 'required|string', // Pastikan kelas dipilih
        'judul_tugas' => 'required',
        'deskripsi_tugas' => 'nullable',
        'deadline' => 'required|date',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'file_url' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:10240',
    ]);

    $user = auth()->user(); // Guru yang login
    $siswaDiKelas = Siswa::where('kelas', $request->kelas)->get();

    if ($siswaDiKelas->isEmpty()) {
        return redirect()->back()->with('error', 'Tidak ada siswa di kelas ' . $request->kelas);
    }

    foreach ($siswaDiKelas as $siswa) {
        $tugas = new Tugas([
            'kelas' => $request->kelas, // Menyimpan kelas tujuan
            'users_id' => $siswa->id, // Siswa penerima tugas
            'authors_id' => $user->id, // Guru yang membuat tugas
            'judul_tugas' => $request->judul_tugas,
            'deskripsi_tugas' => $request->deskripsi_tugas,
            'deadline' => $request->deadline,
            'status' => 'belum selesai',
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/tugas');
            $tugas->foto = basename($path);
        }

        if ($request->hasFile('file_url')) {
            $path = $request->file('file_url')->store('public/tugas');
            $tugas->file_url = basename($path);
        }

        $tugas->save();
    }

    return redirect()->route('guru.tugas')->with('success', 'Tugas berhasil ditambahkan untuk kelas ' . $request->kelas);
}



    public function editTugas($id)
    {
        $tugas = Tugas::findOrFail($id);
        $siswa = User::where('roles', 3)->get(); // Mengambil daftar siswa jika perlu

        return view('guru.edit-tugas', [
            'tugas' => $tugas,
            'siswa' => $siswa,
        ]);
    }

    public function updateTugas(Request $request, $id)
    {
        $request->validate([
            'users_siswa' => 'required|exists:users,id',
            'judul_tugas' => 'required',
            'deskripsi_tugas' => 'nullable',
            'deadline' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file_url' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:10240',
        ]);

        $tugas = Tugas::findOrFail($id);
        $tugas->users_id = $request->users_siswa;
        $tugas->judul_tugas = $request->judul_tugas;
        $tugas->deskripsi_tugas = $request->deskripsi_tugas;
        $tugas->deadline = $request->deadline;

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($tugas->foto) {
                Storage::delete('public/tugas/' . $tugas->foto);
            }
            $path = $request->file('foto')->store('public/tugas');
            $tugas->foto = basename($path);
        }

        if ($request->hasFile('file_url')) {
            // Hapus file lama jika ada
            if ($tugas->file_url) {
                Storage::delete('public/tugas/' . $tugas->file_url);
            }
            $path = $request->file('file_url')->store('public/tugas');
            $tugas->file_url = basename($path);
        }

        $tugas->save();

        return redirect()->route('guru.tugas')->with('success', 'Tugas berhasil diupdate.');
    }

    public function destroyTugas($id)
    {
        $tugas = Tugas::findOrFail($id);
        // Hapus file jika ada
        if ($tugas->file_url) {
            Storage::delete('public/tugas/' . $tugas->file_url);
        }
        if ($tugas->foto) {
            Storage::delete('public/tugas/' . $tugas->foto);
        }
        
        $tugas->delete();

        return redirect()->route('guru.tugas')->with('success', 'Tugas berhasil dihapus.');
    }

    public function editCategory($id)
    {
        $categories = Categories::all();
        $category = Categories::where('id', $id)->first();
        return view('guru.edit_category', [
            'category' => $category,
            'categories' => $categories,
        ]);
    }
    public function editAkunTeacher($id)
    {
        $guru = User::where('roles', 2)->get();
        $akun = User::where('id', $id)->first();
        return view('guru.edit_AkunTeacher', [
            'akun' => $akun,
            'guru' => $guru,
        ]);
    }
    public function editAkunSiswa($id)
    {
        $siswa = User::where('roles', 3)->get();
        $akun = User::where('id', $id)->first();
        return view('guru.edit_AkunSiswa', [
            'akun' => $akun,
            'siswa' => $siswa,
        ]);
    }

    public function updatedCategory(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Categories::findOrFail($id);
        $category->name = $validatedData['name'];
        $category->save();

        return redirect('/guru/categories')->with('success', 'Category successfully updated!');
    }
    public function editBerita($id)
    {
        $berita = News::where('id', $id)->first();
        $categories = Categories::all();
        return view('guru.edit_berita', [
            'berita' => $berita,
            'categories' => $categories,
        ]);
    }

    public function updatedBerita(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|',
        ]);

        $user = auth()->user();
        $news = News::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = 'Berita' . '-' . Str::random(10) . '-' . date('Ymd') . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/' . $filename);

            if ($news->image) {
                Storage::delete('public/' . $news->image);
            }
        } else {
            $filename = $news->image;
        }

        $news->id_title = Str::slug($request['title'], '-');
        $news->image = $filename;
        $news->title = $validatedData['title'];
        $news->content = $validatedData['content'];
        $news->author_id = $user->id;
        $news->category_id = $validatedData['category_id'];

        $news->save();

        return redirect('/guru/berita')->with('success', 'Berita berhasil diupdate!');
    }
}
