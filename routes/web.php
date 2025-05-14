<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'tampilRegister'])->name('register.tampil');
Route::post('/register/submit', [AuthController::class, 'submitRegister'])->name('register.submit');
Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');

Route::get('/', [DonasiController::class, 'form']);               // form donasi
Route::post('/donasi', [DonasiController::class, 'simpan']);      // proses simpan donasi
Route::get('/admin/donasi', [DonasiController::class, 'index']);  // daftar donasi (admin)

Route::get('/dashboard', function () {
    $totalDonasi = \App\Models\Donasi::sum('jumlah');
    $jumlahDonatur = \App\Models\Donasi::count();
    return view('dashboard', compact('totalDonasi', 'jumlahDonatur'));
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
