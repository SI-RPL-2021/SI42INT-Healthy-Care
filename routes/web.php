<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatientController;
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
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('register', [RegisterController::class, 'registerpage'])->name('registerpage');
    Route::post('register', [RegisterController::class, 'register'])->name('register');
});

Route::prefix('patient/')->group(function() {
    Route::get('profile', [PatientController::class, 'profile'])->name('patient.profile');
    Route::get('edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');
    Route::post('update/{id}', [PatientController::class, 'update'])->name('patient.update');
});

Route::prefix('nurse/')->group(function() {
    Route::get('dashboard', [NurseController::class, 'dashboard'])->name('nurse.dashboard');
    Route::get('profile', [NurseController::class, 'profile'])->name('nurse.profile');
    Route::get('notifications', [NurseController::class, 'notif'])->name('nurse.notif');
});

Route::prefix('admin/')->group(function() {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('users', [AdminController::class, 'userManagement'])->name('admin.userManagement');
    Route::get('history', [AdminController::class, 'history'])->name('admin.history');
    Route::get('addAccount', [AdminController::class, 'addAccountPage'])->name('admin.addAccountpage');
    Route::post('addAccount', [AdminController::class, 'addAccount'])->name('admin.addAccount');
    // update account
    Route::get('editAccount/{id}', [AdminController::class, 'editAccount'])->name('admin.editAccount');
    Route::post('updateAccount/{id}', [AdminController::class, 'updateAccount'])->name('admin.updateAccount');

    Route::get('account/delete/{id}', [AdminController::class, 'deleteAccount'])->name('admin.deleteAccount');
});

Route::prefix('doctor/')->group(function() {
    Route::get('profile', [DoctorController::class, 'profile'])->name('doctor.profile');   
});
// Test
Route::get('/1', function () {
    return view('Admin.addAccount');
});

