<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Siswa\SiswaController;
use App\Http\Controllers\Guru\GuruController;
use App\Http\Controllers\guru\AlamatGuruController;
use App\Http\Controllers\guru\KompetensiGuruController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HakaksesController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

    // Home & Profile
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::put('/update', [ProfileController::class, 'update'])->name('update');
        Route::get('/change-password', [ProfileController::class, 'changepassword'])->name('change-password');
        Route::put('/password', [ProfileController::class, 'password'])->name('password');
    });

    // Guru & Siswa Resource
    Route::get('/guru/{id}/detail', [GuruController::class, 'detail'])->name('guru.detail');

    Route::resource('guru', GuruController::class);
    Route::resource('siswa', SiswaController::class);

    // Alamat Guru - Nested routes di bawah guru
    Route::prefix('guru/{guru}/alamat')->name('alamatguru.')->group(function () {
        Route::get('/', [AlamatGuruController::class, 'show'])->name('show');
        Route::get('/create', [AlamatGuruController::class, 'create'])->name('create');
        Route::post('/', [AlamatGuruController::class, 'store'])->name('store');
        Route::get('/edit', [AlamatGuruController::class, 'edit'])->name('edit');
        Route::put('/', [AlamatGuruController::class, 'update'])->name('update');
        Route::delete('/', [AlamatGuruController::class, 'destroy'])->name('destroy');
    });

    // Kompetensi Guru - Resource nested
    Route::prefix('guru/{guru}/kompetensi')->name('kompetensiguru.')->group(function () {
        Route::get('/', [KompetensiGuruController::class, 'index'])->name('index');
        Route::get('/create', [KompetensiGuruController::class, 'create'])->name('create');
        Route::post('/', [KompetensiGuruController::class, 'store'])->name('store');
        Route::get('/{kompetensi}/edit', [KompetensiGuruController::class, 'edit'])->name('edit');
        Route::put('/{kompetensi}', [KompetensiGuruController::class, 'update'])->name('update');
        Route::delete('/{kompetensi}', [KompetensiGuruController::class, 'destroy'])->name('destroy');
    });

    // Hak Akses - Middleware khusus superadmin
    Route::middleware('superadmin')->prefix('hakakses')->name('hakakses.')->group(function () {
        Route::get('/', [HakaksesController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [HakaksesController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [HakaksesController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [HakaksesController::class, 'destroy'])->name('delete');
    });

    // Contoh Halaman (Example)
    Route::prefix('example')->name('example.')->group(function () {
        Route::get('/table', [ExampleController::class, 'table'])->name('table');
        Route::get('/clock', [ExampleController::class, 'clock'])->name('clock');
        Route::get('/chart', [ExampleController::class, 'chart'])->name('chart');
        Route::get('/form', [ExampleController::class, 'form'])->name('form');
        Route::get('/map', [ExampleController::class, 'map'])->name('map');
        Route::get('/calendar', [ExampleController::class, 'calendar'])->name('calendar');
        Route::get('/gallery', [ExampleController::class, 'gallery'])->name('gallery');
        Route::get('/todo', [ExampleController::class, 'todo'])->name('todo');
        Route::get('/contact', [ExampleController::class, 'contact'])->name('contact');
        Route::get('/faq', [ExampleController::class, 'faq'])->name('faq');
        Route::get('/news', [ExampleController::class, 'news'])->name('news');
        Route::get('/about', [ExampleController::class, 'about'])->name('about');
    });

    // Halaman Kosong
    Route::get('/blank-page', [HomeController::class, 'blank'])->name('blank');
});
