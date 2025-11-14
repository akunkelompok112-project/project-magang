<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    if (Auth::check()) {
        // Jika sudah login, arahkan sesuai role
        /** @var User $user */
        $user = Auth::user();
        if ($user->isMahasiswa()) {
            return redirect()->route('mahasiswa.dashboard');
        } elseif ($user->isDosen()) {
            return redirect()->route('dosen.dashboard');
        } else {
            // Arahkan ke rute 'home' sebagai fallback jika role tidak cocok dengan if/elseif di atas
            return redirect()->route('home');
        }
    }
    // Jika belum login, arahkan ke halaman login
    return redirect()->route('login');
});


// --- RUTING AUTENTIKASI ---
// Halaman login (GET)
Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('login')
    ->middleware('guest');

// Proses login (POST)
Route::post('/login', [AuthController::class, 'login'])
    ->name('login.submit')
    ->middleware('guest');

// Logout (POST)
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');


// Grup rute yang HANYA bisa diakses oleh pengguna dengan peran 'dosen'
Route::middleware(['role:dosen'])->group(function () {
    // Semua Route::get(), Route::post(), dll. di sini hanya untuk dosen
    Route::get('/dosen/dashboard', function () {
        return view('dosen.dashboard');
    })->name('dosen.dashboard');
});


// --- RUTING DASHBOARD BERDASARKAN PERAN ---

// Grup rute yang HANYA bisa diakses oleh pengguna dengan peran 'mahasiswa'
Route::middleware(['role:mahasiswa'])->group(function () {
    // Semua Route::get(), Route::post(), dll. di sini hanya untuk mahasiswa
    Route::get('/mahasiswa/dashboard', function () {
        return view('mahasiswa.dashboard');
    })->name('mahasiswa.dashboard');
});
// Grup rute yang HANYA bisa diakses oleh pengguna dengan peran 'Admin'
// Route::middleware(['role:admin'])->group(function () {
//     // Semua Route::get(), Route::post(), dll. di sini hanya untuk Admin
//     Route::get('/admin/dashboard', function () {
//         return view('home.home');
//     })->name('admin.dashboard');
// });

// --- HALAMAN NETRAL/CADANGAN (DITAMBAHKAN DI SINI) ---
// Rute ini berfungsi sebagai tujuan default untuk redirect()->intended() di controller 
// dan sebagai fallback untuk peran yang tidak terdaftar di rute '/' di atas.
Route::get('/home', function () {
    return view('home.home'); // Pastikan Anda memiliki resources/views/home.blade.php
})->middleware('auth')->name('home');
