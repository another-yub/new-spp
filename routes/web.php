<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [ LoginController::class, 'dashboard']);
Route::get('/', [ LoginController::class, 'index']);

//siswa
Route::get('/siswa', [ SiswaController::class, 'index' ]);
Route::get('/siswa/tambah', [ SiswaController::class, 'tambah']);