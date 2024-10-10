<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/produk_layanan', function () {
    return view('produk_layanan');
})->name('produk_layanan');

Route::get('/tentang_kami', function () {
    return view('tentang_kami');
})->name('tentang_kami');

// Route for the Mengapa Memilih Kami page
Route::get('/pilih_kami', function () {
    return view('pilih_kami');
})->name('pilih_kami');

// Route for the Berita page
Route::get('/berita', function () {
    return view('berita');
})->name('berita');

// Route for the Karir page
Route::get('/karir', function () {
    return view('karir');
})->name('karir');

// Route for the Kontak Kami page
Route::get('/kontak_kami', function () {
    return view('kontak_kami');
})->name('kontak_kami');

// Route for the Kontak Kami page
Route::get('/beranda/klien_kami', function () {
    return view('klien_kami');
})->name('klien_kami');