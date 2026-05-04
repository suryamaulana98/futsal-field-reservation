<?php


use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.user.index');
Route::view('/login', 'pages.user.login');
Route::view('/register', 'pages.user.register');
Route::post('/proses-rergister', [\App\Http\Controllers\AuthController::class, 'prosesRegister'])->name('proses-register');
Route::post('/proses-login', [\App\Http\Controllers\AuthController::class, 'prosesLogin'])->name('proses-login');
Route::view('/reservasi', 'pages.user.reservasi');

Route::prefix('admin')->group(function () {
    Route::view('/dashboard', 'pages.admin.dashboard');
    Route::view('/jadwal', 'pages.admin.jadwal');
    Route::view('/jadwal/form', 'pages.admin.jadwal-form');
    Route::view('/reservasi', 'pages.admin.reservasi');
    Route::view('/laporan', 'pages.admin.laporan');
    Route::view('/membership', 'pages.admin.membership');
    Route::view('/membership/form', 'pages.admin.membership-form');
    Route::view('/pelanggan', 'pages.admin.pelanggan');
    Route::view('/pelanggan/form', 'pages.admin.pelanggan-form');
});
