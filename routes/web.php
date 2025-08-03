<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::view('/', 'welcome')->name('welcome');
Route::view('/registro-estudiante', 'registro_user')->name('registro-user');
Route::view('/registro-docente', 'registro_docente')->name('registro-docente');

Route::post('/registro-docente', [LoginController::class, 'register_docente'])->name('register.docente');
Route::post('/registro-estudiante', [LoginController::class, 'register_user'])->name('register.user');


Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');