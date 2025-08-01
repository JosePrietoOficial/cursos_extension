<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::post('/login', [LoginController::class, 'login'])->name('login');