<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\KriteriaKaryawanController;
use App\Http\Controllers\NormalisasiController;
use App\Http\Controllers\SAWController;

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
        Route::controller(KriteriaController::class)->group(function () {
            Route::match(['GET', 'POST'], '/kriteria', 'index')->name('kriteria');
            Route::match(['GET', 'POST'], '/kriteria/update/{id}', 'update')->name('kriteria.update');
            Route::get('/kriteria/delete/{id}', 'delete')->name('kriteria.delete');
        });
        Route::controller(KriteriaKaryawanController::class)->group(function () {
            Route::match(['GET', 'POST'], '/kriteriakaryawan', 'index')->name('kriteriakaryawan');
            Route::match(['GET', 'POST'], '/kriteriakaryawan/update/{id}', 'update')->name('kriteriakaryawan.update');
            Route::get('/kriteriakaryawan/delete/{id}', 'delete')->name('kriteriakaryawan.delete');
        });
        Route::controller(NormalisasiController::class)->group(function () {
            Route::match(['GET', 'POST'], '/normalisasi', 'index')->name('normalisasi');
            Route::match(['GET', 'POST'], '/normalisasi/update/{id}', 'update')->name('normalisasi.update');
            Route::get('/normalisasi/delete/{id}', 'delete')->name('normalisasi.delete');
        });
        Route::controller(SAWController::class)->group(function () {
            Route::get('/saw', 'index')->name('saw');
        });
    });
});

