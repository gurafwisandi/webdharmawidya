<?php

use App\Http\Controllers\AcademicController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\ProfilWebController;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;

// DATABASE
Route::resource('/', UtamaController::class);
Route::get('/kegiatan/{unit}', [KegiatanController::class, 'index'])->name('kegiatan.index');
Route::get('/moment/{unit}/{type}', [KegiatanController::class, 'moment'])->name('kegiatan.moment');
Route::get('/details/{id}/{unit}/{type}', [KegiatanController::class, 'details'])->name('kegiatan.details');
Route::resource('kontak', KontakController::class);
Route::get('/akademik/{unit}', [AkademikController::class, 'index'])->name('akademik.index');
Route::post('/akademi_content', [AkademikController::class, 'akademi_content'])->name('akademi_content.index');
Route::resource('/profil', ProfilWebController::class);
Route::resource('/visimisi', VisiMisiController::class);
Route::resource('/articles', ArticlesController::class);
Route::get('/details/{id}', [ArticlesController::class, 'details'])->name('articles.details');
Route::post('/form', [ArticlesController::class, 'form'])->name('form');
Route::get('/search', [ArticlesController::class, 'search'])->name('search');
route::resource('/fasilitas', FasilitasController::class);
route::resource('/karir', KarirController::class);
Route::get('/detail/{id}', [KarirController::class, 'details'])->name('karir.details');
// DATABASE



route::resource('/ppdb', PPDBController::class);
Route::get('/ppdb/create', [LoginController::class, 'index'])->name('login');
route::resource('/academic', AcademicController::class);
route::resource('/galeri', GaleriController::class);

Route::group(
    [
        'prefix'     => 'login',
    ],
    function () {
        Route::post('/proses', [LoginController::class, 'authenticate'])->name('login.proses');
        Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');
        Route::post('/store', [LoginController::class, 'store'])->name('login.store');
        Route::post('/confirmasi', [LoginController::class, 'confirmasi'])->name('login.confirmasi');
        Route::post('/reverifycode', [LoginController::class, 'reverifycode'])->name('login.reverifycode');
        Route::post('/resetcode', [LoginController::class, 'resetcode'])->name('login.resetcode');
        Route::post('/newpassword', [LoginController::class, 'newpassword'])->name('login.newpassword');
        Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');
    }
);

Route::group(
    [
        // 'prefix'     => 'admin',
        'middleware' => 'auth',
    ],
    function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    }
);
