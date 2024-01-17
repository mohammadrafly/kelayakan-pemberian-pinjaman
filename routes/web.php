<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LamaKerjaController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\RiwayatPinjamanController;
use App\Http\Controllers\TotalTanggunganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () { 
    Route::controller(AuthController::class)->group(function () {
        Route::match(['GET', 'POST'], '/', 'Login')->name('login');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () { 
        Route::controller(DashboardController::class)->group(function () {
            Route::match(['GET', 'POST'], '/profile/{id}', 'Profile')->name('profile');
            Route::post('/profile/change/password/{id}', 'changePassword')->name('profile.changePassword');
            Route::get('/logout', 'Logout')->name('logout');
            Route::get('/', 'index')->name('dashboard');
        });
        Route::controller(UsersController::class)->group(function () {
            Route::match(['GET', 'POST'], '/users', 'index')->name('users');
            Route::match(['GET', 'POST'], '/users/update/{id}', 'update')->name('users.update');
            Route::get('/users/delete/{id}', 'delete')->name('users.delete');
        });
        Route::controller(KaryawanController::class)->group(function () {
            Route::match(['GET', 'POST'], '/karyawan', 'index')->name('karyawan');
            Route::match(['GET', 'POST'], '/karyawan/update/{id}', 'update')->name('karyawan.update');
            Route::get('/karyawan/delete/{id}', 'delete')->name('karyawan.delete');
        });
        Route::controller(LamaKerjaController::class)->group(function () {
            Route::match(['GET', 'POST'], '/lamakerja', 'index')->name('lamakerja');
            Route::match(['GET', 'POST'], '/lamakerja/update/{id}', 'update')->name('lamakerja.update');
            Route::get('/lamakerja/delete/{id}', 'delete')->name('lamakerja.delete');
        });
        Route::controller(PinjamanController::class)->group(function () {
            Route::match(['GET', 'POST'], '/pinjaman', 'index')->name('pinjaman');
            Route::match(['GET', 'POST'], '/pinjaman/update/{id}', 'update')->name('pinjaman.update');
            Route::get('/pinjaman/delete/{id}', 'delete')->name('pinjaman.delete');
        });
        Route::controller(RiwayatPinjamanController::class)->group(function () {
            Route::match(['GET', 'POST'], '/riwayatpinjaman', 'index')->name('riwayatpinjaman');
            Route::match(['GET', 'POST'], '/riwayatpinjaman/update/{id}', 'update')->name('riwayatpinjaman.update');
            Route::get('/riwayatpinjaman/delete/{id}', 'delete')->name('riwayatpinjaman.delete');
        });
        Route::controller(TotalTanggunganController::class)->group(function () {
            Route::match(['GET', 'POST'], '/totaltanggungan', 'index')->name('totaltanggungan');
            Route::match(['GET', 'POST'], '/totaltanggungan/update/{id}', 'update')->name('totaltanggungan.update');
            Route::get('/totaltanggungan/delete/{id}', 'delete')->name('totaltanggungan.delete');
        });
    });
});

