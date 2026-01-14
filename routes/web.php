<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Middleware\RoleMiddleware;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerproses'])->name('register-prosess');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(RoleMiddleware::class . ':admin')->group(function () {
    //dashboard admin
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard-admin');
    // kelola pengaduan
    Route::get('/kelola-pengaduan', [AdminController::class, 'pengaduan'])->name('kelola-pengaduan-admin');
    Route::put('/kelola-pengaduan/{id}', [AdminController::class, 'update'])->name('admin-pengaduan-update');
    Route::get('/admin/detail-pengaduan/{id}', [AdminController::class, 'show'])->name('admin-pengaduan-show');
    Route::delete('/kelola-pengaduan/{id}', [AdminController::class, 'destroy'])->name('admin-pengaduan-destroy');
    //kelola masyarakat
    Route::get('/kelola-masyarakat', [AdminController::class, 'masyarakat'])->name('kelola-masyarakat-admin');
    Route::put('/kelola-masyarakat/{id}', [AdminController::class, 'updatemasyarakat'])->name('update-masyarakat-admin');
    Route::get('/detail-masyarakat/{id}', [AdminController::class, 'showmasyarakat'])->name('show-masyarakat-admin');
    Route::get('/tambah-masyarakat', [AdminController::class, 'createmasyarakat'])->name('create-masyarakat-admin');
    Route::post('/tambah-masyarakat', [AdminController::class, 'storemasyarakat'])->name('store-masyarakat-admin');
    Route::delete('/kelola-masyarakat/{id}', [AdminController::class, 'destroymasyarakat'])->name('destroy-masyarakat-admin');

    //kelola profile
    Route::get('/kelola-profile', [AuthController::class, 'profile'])->name('profile-admin');
    Route::put('/kelola-profile', [AuthController::class, 'profileupdate'])->name('update-profile-admin');
});

Route::middleware(RoleMiddleware::class . ':petugas')->group(function () {
    // dashboard petugas
    Route::get('/petugas/dashboard', [PetugasController::class, 'index'])->name('dashboard-petugas');
    // kelola laporan
    Route::get('/kelola-laporan', [PetugasController::class, 'indexlaporan'])->name('kelola-laporan-petugas');
    Route::get('/petugas/detail-pengaduan/{id}', [PetugasController::class, 'show'])->name('petugas-pengaduan-show');

    Route::get('/petugas/kelola-profile', [AuthController::class, 'profilepetugas'])->name('profile-petugas');
    Route::put('/petugas/kelola-profile', [AuthController::class, 'profileupdatepetugas'])->name('update-profile-petugas');
});

Route::middleware(RoleMiddleware::class . ':masyarakat')->group(function () {
    Route::get('/masyarakat/dashboard', [MasyarakatController::class, 'index'])->name('dashboard-masyarakat');
    Route::get('/masyarakat/pengaduan', [MasyarakatController::class, 'complainIndex'])->name('pengaduan-masyarakat');
    Route::get('/masyarakat/tambah', [MasyarakatController::class, 'create'])->name('create-pengaduan-masyarakat');
    Route::post('/masyarakat/tambah', [MasyarakatController::class, 'store'])->name('store-pengaduan-masyarakat');

    Route::get('/masyarakat/profile', [AuthController::class, 'indexprofile'])->name('profile-masyarakat');
    Route::post('/masyarakat/profile', [AuthController::class, 'storeprofile'])->name('update-profile-masyarakat');
});
