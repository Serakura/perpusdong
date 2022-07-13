<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('dashboard', [
        "title" => "Dashboard"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
})->name('login.view')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.action');

Route::get('/signup', [RegisterController::class, 'show']);
Route::post('/signup', [RegisterController::class, 'register'])->name('signup.action');

// Petugas Routing
Route::get('/petugas/list-buku', [ListBukuController::class, 'index']);

Route::get('/petugas/list-rak', function () {
    return view('content.petugas.list-rak');
});
Route::get('/petugas/list-anggota', function () {
    return view('content.petugas.list-anggota');
});
Route::get('/petugas/list-pinjam', function () {
    return view('content.petugas.list-pinjam');
});
Route::get('/petugas/list-balik', function () {
    return view('content.petugas.list-balik');
});

Route::get('/anggota/list-buku', function () {
    return view('content.anggota.list-buku');
});

Route::get('/anggota/list-pinjam', function () {
    return view('content.anggota.list-pinjam');
});

Route::get('/anggota/list-riwayat', function () {
    return view('content.anggota.list-riwayat');
});
