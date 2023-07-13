<?php

use Illuminate\Support\Facades\Route;
use App\Models\Buku;
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
    return view('beranda');
});

Route::get('/perpustakaan', function () {
    return view('perpustakaan');
});

Route::get('/kearsipan', function () {
    return view('kearsipan2');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/praktikum', function () {
    return view('praktikum');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/buku', [App\Http\Controllers\bukuController::class, 'index'])->name('buku');
Route::post('/buku/tambah', [App\Http\Controllers\bukuController::class, 'store'])->name('buku.tambah');
Route::get('/buku/{buku}/edit', [App\Http\Controllers\bukuController::class, 'edit'])->name('buku.edit');
Route::patch('/buku/{buku}', [App\Http\Controllers\bukuController::class, 'update'])->name('buku.update');
Route::get('/buku/{id}/hapus', [App\Http\Controllers\bukuController::class, 'delete'])->name('buku.hapus');

// Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->middleware('cekstatus');