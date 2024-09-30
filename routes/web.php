<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [ LoginController::class, 'dashboard']);
Route::get('/', [ LoginController::class, 'index']);

//siswa
Route::get('/siswa', [ SiswaController::class, 'index' ]);
Route::get('/siswa/tambah', [ SiswaController::class, 'tambah']);
Route::post('/siswa/simpan', [ SiswaController::class, 'simpan']);
Route::get('/siswa/edit/{id}', [ SiswaController::class, 'edit']);
Route::post('/siswa/update', [ SiswaController::class, 'update']);
Route::get('/siswa/delete/{id}', [ SiswaController::class, 'delete']);

//kelas
Route::get('/kelas', [ KelasController::class, 'index' ]);
Route::get('/kelas/tambah', [ KelasController::class, 'tambah']);
Route::post('/kelas/simpan', [ KelasController::class, 'simpan']);
