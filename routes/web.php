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
Route::get('/', [LandingController::class, 'home']);
Route::get('/profile', [LandingController::class, 'profilSekolah']);
Route::get('/staff_profile', [LandingController::class, 'profilStaff']);
Route::get('/news', [LandingController::class, 'news']);
Route::get('/news/{id_title}', [LandingController::class, 'show']);
Route::get('/galery', [LandingController::class, 'galery']);
Route::get('/contact', [LandingController::class, 'contact']);
Route::get('/login', [LandingController::class, 'login']);
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
            Route::post('/guru/akun-teacher', [GuruController::class, 'insertAkunTeacher']);
            Route::get('/guru/teacher', [GuruController::class, 'teacher']);
            Route::post('/guru/teacher', [GuruController::class, 'insertTeacher']);
            Route::get('/guru/siswa', [GuruController::class, 'siswa']);
            Route::post('/guru/akun-siswa', [GuruController::class, 'StoreSiswaAccount']);
            Route::get('/guru/data-siswa', [GuruController::class, 'DataSiswa']);
            Route::get('/guru/teacher/view/{id}/={nama_siswa}', [GuruController::class, 'ShowDataTeacher']);
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
        });
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
            Route::get('/siswa/tabungan', [SiswaController::class, 'saving']);
            Route::get('/siswa/nilai', [SiswaController::class, 'nilai']);
        });
    });
});

Route::fallback(function () {
    return abort(404);
});
