<?php

use App\Models\Berita;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(
        'index',
        [
            'title' => 'Selamat Datang',
            'berita' => Berita::all()
        ]
    );
});

Route::get('/indeks-kami', function () {
    return view(
        'indeks_kami'
    );
});

Route::get('/berita/{slug}', function ($slug) {

    $berita = Berita::find($slug);

    return view(
        'berita',
        [
            'title' => 'Berita',
            'berita' => $berita
        ]
    );
});

Route::get('/admin', function () {
    return view(
        'admin/index',
        [
            'title' => 'Dashboard'
        ]
    );
});
Route::get('/admin/kelola-profil', function () {
    return view(
        'admin/kelola-profil',
        [
            'title' => 'Kelola Profil'
        ]
    );
});
Route::get('/admin/kelola-berita', function () {
    return view(
        'admin/kelola-berita',
        [
            'title' => 'Kelola Berita'
        ]
    );
});
Route::get('/admin/layanan/tte', function () {
    return view(
        'admin/layanan/tte',
        [
            'title' => 'Tanda Tangan Elektronik'
        ]
    );
});
