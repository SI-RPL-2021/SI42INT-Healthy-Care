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
Route::get('/', function() {
    return view('Auth.login');
});

Route::prefix('/')->group(function() {
    Route::get('login', [LoginController::class, 'loginpage'])->name('loginpage');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('register', [RegisterController::class, 'registerpage'])->name('registerpage');
    Route::post('register', [RegisterController::class, 'register'])->name('register');
});

Route::prefix('patient/')->group(function() {
    Route::get('homepage', [PatientController::class, 'homepage'])->name('patient.homepage');
    Route::get('profile', [PatientController::class, 'profile'])->name('patient.profile');
    Route::get('edit/{id}', [PatientController::class, 'updateProfilePage'])->name('patient.edit');
    Route::post('update/{id}', [PatientController::class, 'update'])->name('patient.update');
    Route::post('appointment', [PatientController::class, 'appointment'])->name('patient.appointment');
    Route::get('schedule', [PatientController::class, 'schedule'])->name('patient.schedule');
    Route::get('updateSchedule', [PatientController::class, 'updateSchedule'])->name('patient.updateSchedule');
    // Route::post('dynamic_dependent/fetch', [PatientController::class, 'fetch'])->name('dynamicdependent.fetch');
});

Route::prefix('nurse/')->group(function() {
    Route::get('dashboard', [NurseController::class, 'dashboard'])->name('nurse.dashboard');
    Route::get('profile', [NurseController::class, 'profile'])->name('nurse.profile');
    Route::get('updateSchedule', [NurseController::class, 'updateSchedule'])->name('nurse.updateSchedule');
    Route::get('record', [NurseController::class, 'record'])->name('nurse.record');
});

Route::prefix('admin/')->group(function() {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('updateProfile', [AdminController::class, 'updateProfile'])->name('admin.postProfile');
    Route::get('users', [AdminController::class, 'userManagement'])->name('admin.userManagement');
    Route::get('history', [AdminController::class, 'history'])->name('admin.history');
    Route::get('addAccount', [AdminController::class, 'addAccountPage'])->name('admin.addAccountPage');
    Route::post('addAccount', [AdminController::class, 'addAccount'])->name('admin.addAccount');
    Route::get('editAccount/{id}', [AdminController::class, 'editAccountPage'])->name('admin.editAccountPage');
    Route::post('updateAccount/{id}', [AdminController::class, 'updateAccount'])->name('admin.updateAccount');
    Route::get('account/delete/{id}', [AdminController::class, 'deleteAccount'])->name('admin.deleteAccount');
    Route::get('transaction/delete/{id}', [AdminController::class, 'deleteTransaction'])->name('admin.deleteTransaction');
});

Route::prefix('doctor/')->group(function() {
    Route::get('profile', [DoctorController::class, 'profile'])->name('doctor.profile');
    Route::get('dashboard', [DoctorController::class, 'dashboard'])->name('doctor.dashboard');
    Route::get('checkUp', [DoctorController::class, 'checkUp'])->name('doctor.checkUp');
    Route::post('medicalRecord', [DoctorController::class, 'medicalRecord'])->name('doctor.medicalRecord');
    Route::get('record', [DoctorController::class, 'record'])->name('doctor.record');
});
// Test
Route::get('/1', function () {
    return view('Doctor.records');
});

Route::get('/2', [RegisterController::class, 'example']);
