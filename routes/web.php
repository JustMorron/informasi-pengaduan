<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComplaintController;
use App\Http\Middleware\RoleMiddleware;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(RoleMiddleware::class . ':admin')->group(function () {
    //dashboard admin
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard-admin');
    // kelola pengaduan
    Route::get('/kelola-pengaduan', [AdminController::class, 'pengaduan'])->name('kelola-pengaduan-admin');
    Route::put('/kelola-pengaduan/{id}', [AdminController::class, 'update'])->name('admin-pengaduan-update');
    Route::get('/detail-pengaduan/{id}', [AdminController::class, 'show'])->name('admin-pengaduan-show');
    Route::delete('/kelola-pengaduan/{id}', [AdminController::class, 'destroy'])->name('admin-pengaduan-destroy');
    //kelola masyarakat
    Route::get('/kelola-masyarakat', [AdminController::class, 'masyarakat'])->name('kelola-masyarakat-admin');
    Route::put('/kelola-masyarakat/{id}', [AdminController::class, 'updatemasyarakat'])->name('update-masyarakat-admin');
    Route::get('/detail-masyarakat/{id}', [AdminController::class, 'showmasyarakat'])->name('show-masyarakat-admin');
    Route::get('/tambah-masyarakat', [AdminController::class, 'createmasyarakat'])->name('create-masyarakat-admin');
    Route::post('/tambah-masyarakat', [AdminController::class, 'storemasyarakat'])->name('store-masyarakat-admin');
    Route::delete('/kelola-masyarakat/{id}', [AdminController::class, 'destroymasyarakat'])->name('destroy-masyarakat-admin');

    //kelola user
    Route::get('/kelola-profile', [AuthController::class, 'profile'])->name('profile-admin');
    Route::put('/kelola-profile', [AuthController::class, 'profileupdate'])->name('update-profile-admin');
});
