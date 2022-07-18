<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index']);
Route::post('/login', [App\Http\Controllers\LoginController::class, 'login']);

Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index']);
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'register']);

Auth::routes(['login'=>false,'register'=>false]);


Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

// User
Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);
Route::post('/user', [App\Http\Controllers\UserController::class, 'tambah']);
Route::post('/user/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/user/hapus/{id}', [App\Http\Controllers\UserController::class, 'hapus']);

// Bus
Route::get('/bus', [App\Http\Controllers\BusController::class, 'index']);
Route::post('/bus', [App\Http\Controllers\BusController::class, 'tambah']);
Route::post('/bus/{id}', [App\Http\Controllers\BusController::class, 'edit']);
Route::post('/bus/hapus/{id}', [App\Http\Controllers\BusController::class, 'hapus']);

// Jadwal Bus
Route::get('/jadwalbus', [App\Http\Controllers\JadwalBusController::class, 'index']);
Route::post('/jadwalbus', [App\Http\Controllers\JadwalBusController::class, 'tambah']);
Route::post('/jadwalbus/{id}', [App\Http\Controllers\JadwalBusController::class, 'edit']);
Route::post('/jadwalbus/hapus/{id}', [App\Http\Controllers\JadwalBusController::class, 'hapus']);

// Lokasi
Route::get('/lokasibus/', [App\Http\Controllers\LokasiBusController::class, 'getlokasiall']);
Route::get('/lokasibus/{id}', [App\Http\Controllers\LokasiBusController::class, 'getlokasi']);
Route::post('/lokasibus/{id}', [App\Http\Controllers\LokasiBusController::class, 'updatelokasi']);

// Profil
Route::resource('/profile', App\Http\Controllers\ProfileController::class);



