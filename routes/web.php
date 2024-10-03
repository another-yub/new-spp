<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [ LoginController::class, 'dashboard']);
Route::get('/', [ LoginController::class, 'index']);
Route::get('/search', [ LoginController::class, 'search']);

//siswa
Route::get('/siswa', [ SiswaController::class, 'index' ]);
Route::get('/siswa/tambah', [ SiswaController::class, 'tambah']);
Route::post('/siswa/simpan', [ SiswaController::class, 'simpan']);
Route::get('/siswa/edit/{id}', [ SiswaController::class, 'edit']);
Route::post('/siswa/update', [ SiswaController::class, 'update']);
Route::get('/siswa/delete/{id}', [ SiswaController::class, 'delete']);
Route::get('/siswa/search', [ SiswaController::class, 'search']);

//kelas
Route::get('/kelas', [ KelasController::class, 'index' ]);
Route::get('/kelas/tambah', [ KelasController::class, 'tambah']);
Route::post('/kelas/simpan', [ KelasController::class, 'simpan']);
Route::get('/kelas/edit/{id}', [ KelasController::class, 'edit']);
Route::post('/kelas/update', [ KelasController::class, 'update']);
Route::get('/kelas/delete/{id}', [ KelasController::class, 'delete']);
Route::get('/kelas/search', [ KelasController::class, 'search']);
