<?php

use App\Http\Middleware\Guru;
use App\Http\Middleware\Siswa;
use App\Http\Middleware\Roles1;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Guru\GuruController;
use App\Http\Controllers\Siswa\SiswaController;
use App\Http\Middleware\profilGuru;
use App\Http\Middleware\profilSiswa;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|{{  }}
*/
// Landing Page
//Route::get('/', function () {
//    return view('comingsoon');
//});

//Home 
Route::get('/', [LandingController::class, 'home']);
Route::get('/news/{id}', [LandingController::class, 'show'])->name('news.show');

//Header Profile Sekolah
Route::get('/kepalasekolah', [LandingController::class, 'kepalasekolah'])->name('kepalasekolah');
Route::get('/datasekolah', [LandingController::class, 'dataPokok'])->name('datasekolah');
Route::get('/visimisi', [LandingController::class, 'visiMisi'])->name('visimisi');
Route::get('/staff_profile', [LandingController::class, 'profilStaff']);
Route::get('/struktur', [LandingController::class, 'struktur']);
Route::get('/sejarah', [LandingController::class, 'sejarah']);

//Header Berita
Route::get('/news', [LandingController::class, 'news']);
Route::get('/news/{id_title}', [LandingController::class, 'show']);
Route::get('/prestasi', [LandingController::class, 'prestasi'])->name('prestasi');
Route::get('/detail-prestasi/{id}', [LandingController::class, 'detailPrestasi'])->name('detail-prestasi');

//Header Galery
Route::get('/galery', [LandingController::class, 'galery']);
Route::get('/galery', [LandingController::class, 'galery'])->name('galery.index');
//Header Contact
Route::get('/contact', [LandingController::class, 'contact']);

//Header Login
Route::get('/login', [LandingController::class, 'login'])->name('login');;
Route::post('/login', [LandingController::class, 'authenticate']);
Route::get('/logout', [LandingController::class, 'logout']);

//handle roles
Route::middleware(['auth'])->group(function () {
    Route::get('/handleRoles', [LandingController::class, 'handleRoles']);
});
Route::middleware(['auth', 'verified'])->group(function () {
    //guru
    Route::middleware(Guru::class)->group(function () {
        Route::middleware(Roles1::class)->group(function () {
            Route::get('/guru/akun-teacher', [GuruController::class, 'akunTeacher']);
            Route::get('/guru/edit/akun-teacher/{id}', [GuruController::class, 'editAkunTeacher']);
            Route::get('/guru/edit/akun-siswa/{id}', [GuruController::class, 'editAkunSiswa']);
            Route::post('/guru/updated/akun-teacher/{id}', [GuruController::class, 'updatedAkunTeacher']);
            Route::post('/guru/updated/akun-siswa/{id}', [GuruController::class, 'updatedAkunSiswa']);
            Route::get('/guru/delete/akun-teacher/{id}', [GuruController::class, 'deleteAkunTeacher']);
            Route::get('/guru/delete/akun-siswa/{id}', [GuruController::class, 'deleteAkunSiswa']);
            Route::get('/guru/delete/teacher/{id}', [GuruController::class, 'deleteTeacher']);
            Route::get('/guru/delete/siswa/{id}', [GuruController::class, 'deleteSiswa']);
            Route::post('/guru/akun-teacher', [GuruController::class, 'insertAkunTeacher']);
            Route::get('/guru/teacher', [GuruController::class, 'teacher']);
            Route::post('/guru/teacher', [GuruController::class, 'insertTeacher']);
            Route::get('/guru/{id}/edit', [GuruController::class, 'editTeacher'])->name('guru.edit');
            Route::put('/guru/{id}', [GuruController::class, 'updateTeacher'])->name('guru.update');
            Route::get('/guru/siswa', [GuruController::class, 'siswa']);
            Route::post('/guru/akun-siswa', [GuruController::class, 'StoreSiswaAccount']);
            Route::get('/guru/data-siswa', [GuruController::class, 'DataSiswa']);
            Route::get('/guru/teacher/view/{id}/={nama_siswa}', [GuruController::class, 'ShowDataTeacher']);
            Route::get('/guru/tugas', [GuruController::class, 'tugas'])->name('guru.tugas');
            Route::get('/guru/tugas/{id}', [GuruController::class, 'tugasDetail'])->name('guru.tugas.detail');
            Route::post('/guru/tugas', [GuruController::class, 'storeTugas'])->name('guru.tugas.store');
            Route::get('/guru/tugas/{id}/edit', [GuruController::class, 'editTugas'])->name('guru.tugas.edit');
            Route::put('/guru/tugas/{id}', [GuruController::class, 'updateTugas'])->name('guru.tugas.update');
            Route::delete('/guru/tugas/{id}', [GuruController::class, 'destroyTugas'])->name('guru.tugas.destroy');
            Route::get('/guru/photo', [GuruController::class, 'photo'])->name('guru.photo');
            Route::post('/guru/photo/store', [GuruController::class, 'storePhoto'])->name('guru.photo.store');
            Route::get('/guru/photo/{id}/edit', [GuruController::class, 'editPhoto'])->name('guru.photo.edit');
            Route::put('/guru/photo/{id}', [GuruController::class, 'updatePhoto'])->name('guru.photo.update');
            Route::delete('/guru/photo/{id}', [GuruController::class, 'destroyPhoto'])->name('guru.photo.destroy');
            Route::get('/guru/video', [GuruController::class, 'video'])->name('guru.video');
            Route::post('/guru/video/store', [GuruController::class, 'storeVideo'])->name('guru.video.store');
            Route::get('/guru/video/{id}/edit', [GuruController::class, 'editVideo'])->name('guru.video.edit');
            Route::put('/guru/video/{id}', [GuruController::class, 'updateVideo'])->name('guru.video.update');
            Route::delete('/guru/video/{id}', [GuruController::class, 'destroyVideo'])->name('guru.video.destroy');
            Route::get('/guru/achievements', [GuruController::class, 'achievements'])->name('achievement');
            Route::post('/guru/achievements', [GuruController::class, 'storeAchievement'])->name('achievement.store');
            Route::get('/guru/achievements/{id}/edit', [GuruController::class, 'editAchievement'])->name('achievement.edit');
            Route::put('/guru/achievements/{id}', [GuruController::class, 'updateAchievement'])->name('achievement.update');
            Route::delete('/guru/achievements/{id}', [GuruController::class, 'destroyAchievement'])->name('achievement.destroy');                    
            
            

        });
        Route::middleware(profilGuru::class)->group(function () {
            Route::get('/guru/berita', [GuruController::class, 'berita']);
            Route::get('/guru/insert-berita', [GuruController::class, 'InsertBerita']);
            Route::post('/guru/StoreBerita', [GuruController::class, 'StoreBerita']);
            Route::get('/guru/publish/{id}', [GuruController::class, 'publish']);
            Route::get('/guru/draft/{id}', [GuruController::class, 'draft']);
            Route::get('/guru/categories', [GuruController::class, 'categories']);
            Route::post('/guru/StoreCategories', [GuruController::class, 'StoreCategories']);
            Route::get('/guru/saving', [GuruController::class, 'saving']);
            Route::post('/guru/saving', [GuruController::class, 'storeSaving']);
            Route::get('/guru/siswa/saving/{id}/={name}', [GuruController::class, 'savingDetail']);
            Route::get('/guru/siswa/view/{id}/={nama_siswa}', [GuruController::class, 'ShowDataSiswa']);
            Route::get('/guru/tugas', [GuruController::class, 'tugas'])->name('guru.tugas');
            Route::get('/guru/tugas/{id}', [GuruController::class, 'tugasDetail'])->name('guru.tugas.detail');
            Route::post('/guru/tugas', [GuruController::class, 'storeTugas'])->name('guru.tugas.store');
            Route::get('/guru/tugas/{id}/edit', [GuruController::class, 'editTugas'])->name('guru.tugas.edit');
            Route::put('/guru/tugas/{id}', [GuruController::class, 'updateTugas'])->name('guru.tugas.update');
            Route::delete('/guru/tugas/{id}', [GuruController::class, 'destroyTugas'])->name('guru.tugas.destroy');
            Route::get('/guru/photo', [GuruController::class, 'photo'])->name('guru.photo');
            Route::post('/guru/photo/store', [GuruController::class, 'storePhoto'])->name('guru.photo.store');
            Route::get('/guru/photo/{id}/edit', [GuruController::class, 'editPhoto'])->name('guru.photo.edit');
            Route::put('/guru/photo/{id}', [GuruController::class, 'updatePhoto'])->name('guru.photo.update'); 
            Route::delete('/guru/photo/{id}', [GuruController::class, 'destroyPhoto'])->name('guru.photo.destroy');           
            Route::get('/guru/video', [GuruController::class, 'video'])->name('guru.video');
            Route::post('/guru/video/store', [GuruController::class, 'storeVideo'])->name('guru.video.store');
            Route::get('/guru/video/{id}/edit', [GuruController::class, 'editVideo'])->name('guru.video.edit');
            Route::put('/guru/video/{id}', [GuruController::class, 'updateVideo'])->name('guru.video.update');
            Route::delete('/guru/video/{id}', [GuruController::class, 'destroyVideo'])->name('guru.video.destroy');
            Route::get('/guru/achievements', [GuruController::class, 'achievements'])->name('achievement');
            Route::post('/guru/achievements', [GuruController::class, 'storeAchievement'])->name('achievement.store');
            Route::get('/guru/achievements/{id}/edit', [GuruController::class, 'editAchievement'])->name('achievement.edit');
            Route::put('/guru/achievements/{id}', [GuruController::class, 'updateAchievement'])->name('achievement.update');
            Route::delete('/guru/achievements/{id}', [GuruController::class, 'destroyAchievement'])->name('achievement.destroy');
            
        });
        Route::get('/guru/edit/berita/{id}', [GuruController::class, 'editBerita']);
        Route::post('/guru/updated/berita/{id}', [GuruController::class, 'updatedBerita']);
        Route::get('/edit/profil/guru/{id}', [GuruController::class, 'editProfilGuru']);
        Route::get('/guru/delete/category/{id}', [GuruController::class, 'deleteCategory']);
        Route::get('/guru/edit/category/{id}', [GuruController::class, 'editCategory']);
        Route::post('/guru/updated/category/{id}', [GuruController::class, 'updatedCategory']);

        Route::get('/guru/delete/berita/{id}', [GuruController::class, 'deleteBerita']);
        Route::post('/guru/profil/updated/{id}', [GuruController::class, 'updatedProfilGuru']);
        Route::get('/guru/settings', [GuruController::class, 'settings']);
        Route::get('/guru/profil', [GuruController::class, 'profil']);
        Route::post('/guru/profil', [GuruController::class, 'StoreProfil']);
        Route::get('/guru/dashboard', [GuruController::class, 'dashboard']);


        Route::post('/guru/updateAkun', [GuruController::class, 'updateAkun']);
        Route::post('/guru/updateProfil', [GuruController::class, 'updateProfil']);
    });
    //siswa
    Route::middleware(Siswa::class)->group(function () {
        Route::get('/siswa/dashboard', [SiswaController::class, 'dashboard']);
        Route::post('/siswa/profil', [SiswaController::class, 'StoreProfil']);
        Route::middleware(profilSiswa::class)->group(function () {
            Route::get('/edit/profil/{id}', [SiswaController::class, 'edit']);
            Route::post('/update/profil/{id}', [SiswaController::class, 'updateProfil']);
            Route::get('/siswa/tabungan', [SiswaController::class, 'saving']);
            Route::get('/siswa/nilai', [SiswaController::class, 'nilai']);
            Route::get('/siswa/tugas', [SiswaController::class, 'tugas'])->name('siswa.tugas');
            Route::get('/siswa/tugas/{id}', [SiswaController::class, 'tugasDetail'])->name('siswa.detail-tugas');
        });
    });
});

Route::fallback(function () {
    return abort(404);
});
