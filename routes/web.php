<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\KaryawanController;

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
    });
});

