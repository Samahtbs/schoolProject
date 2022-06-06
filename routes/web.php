<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MainController;

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('student', [AuthController::class, 'student']);
Route::get('teacher', [AuthController::class, 'teacher']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/class/{id}', [MainController::class, 'returnclass']);
Route::get('/class/teacher/{id}', [MainController::class, 'returnteacher']);
Route::get('/classT/{id}', [MainController::class, 'returnclassT']);
Route::get('/classT/student/{id}', [MainController::class, 'returnstudent']);
Route::post('/upladfile', [MainController::class, 'uploadfile']);
