<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('/')->group(function() {
    Route::get('login', [LoginController::class, 'loginpage'])->name('loginpage');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('register', [RegisterController::class, 'registerpage'])->name('registerpage');
    Route::post('register', [RegisterController::class, 'register'])->name('register');
});

Route::prefix('nurse/')->group(function() {
    Route::get('dashboard', [NurseController::class, 'dashboard'])->name('nurse.dashboard');
});

Route::prefix('admin/')->group(function() {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('users', [AdminController::class, 'userManagement'])->name('admin.userManagement');

});

Route::prefix('doctor/')->group(function() {
    Route::get('profile', [DoctorController::class, 'profile'])->name('doctor.profile');   
});
// Test
Route::get('/1', function () {
    return view('Admin.profile');
});

