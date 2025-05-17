<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonasiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [AuthController::class, 'tampilRegister'])->name('register.tampil');
Route::post('/register/submit', [AuthController::class, 'submitRegister'])->name('register.submit');
Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/', [DonasiController::class, 'form']);
Route::get('/donasi', [DonasiController::class, 'create']);               // form donasi
Route::post('/donasi', [DonasiController::class, 'store']);
Route::get('/admin/donasi', [DonasiController::class, 'index']);  // daftar donasi (admin)


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        $totalDonasi = \App\Models\Donasi::sum('jumlah');
        $jumlahDonatur = \App\Models\Donasi::count();
        return view('dashboard', compact('totalDonasi', 'jumlahDonatur'));
    })->name('dashboard');
});
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

Route::get('/home', [DonasiController::class, 'home']);

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        $user = Auth::user();
        return view('profile', compact('user'));
    })->name('profile');
});
