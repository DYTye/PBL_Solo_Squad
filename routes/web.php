<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HakaksesController;
use App\Http\Controllers\Guru\GuruController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

    // Home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Profile
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::put('/update', [ProfileController::class, 'update'])->name('update');
        Route::get('/change-password', [ProfileController::class, 'changepassword'])->name('change-password');
        Route::put('/password', [ProfileController::class, 'password'])->name('password');
    });

    // Guru (CRUD + Detail)
    Route::resource('guru', GuruController::class);
    Route::get('/guru/{id}/detail', [GuruController::class, 'detail'])->name('guru.detail');

    // Hak Akses (Superadmin Only)
    Route::middleware(['superadmin'])->prefix('hakakses')->name('hakakses.')->group(function () {
        Route::get('/', [HakaksesController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [HakaksesController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [HakaksesController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [HakaksesController::class, 'destroy'])->name('delete');
    });

    // Contoh Halaman
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

