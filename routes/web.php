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

Route::get('/', function () {
    return view('index', [
        "title" => "BERANDA"
    ]);
});

Route::get('about', function () {
    return view('about', [
        "title" => "TENTANG"
    ]);
});

Route::get('/quote', function () {
    return view('quote', [
        "title" => "STRUKTUR PRODI"
    ]);
});

Route::get('/team', function () {
    return view('team',[
        "title" => "TIM PRODI"
    ]);
});

Route::get('/mitra', function () {
    return view('mitra',[
        "title" => "MITRA PRODI"
    ]);
});

Route::get('/berita', function () {
    return view('berita',[
        "title" => "BERITA"
    ]);
});

Route::get('/unduh', function () {
    return view('unduh',[
        "title" => "UNDUH"
    ]);
});

Route::get('/testimonial', function () {
    return view('testimonial',[
        "title" => "FASILITAS"
    ]);
});

Route::get('/agenda', function () {
    return view('agenda',[
        "title" => "AGENDA"
    ]);
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

Route::get('/galeri', function () {
    return view('galeri',[
        "title" => "GALERI"
    ]);
});
