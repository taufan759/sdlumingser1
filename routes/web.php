<?php

use App\Http\Controllers\LandingController;
use App\Http\Middleware\Guru;
use App\Http\Middleware\Siswa;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [LandingController::class, 'home']);
Route::get('/profile', [LandingController::class, 'profilSekolah']);
Route::get('/principal_profile', [LandingController::class, 'profilKepsek']);
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
        Route::get('/guru/home', [GuruController::class, 'home']);
    });
    //siswa
    Route::middleware(Siswa::class)->group(function () {
        Route::get('/siswa/dashboard', [SiswaController::class, 'dashboard']);
    });
});