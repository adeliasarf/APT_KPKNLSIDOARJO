<?php

use App\Http\Controllers\Antrian;

Route::get('/', [Antrian::class, 'index']); // Menampilkan halaman utama
Route::get('/antri_umum', [Antrian::class, 'antri_umum']); // Update antrian umum
Route::get('/antri_lelang', [Antrian::class, 'antri_lelang']); // Update antrian lelang
Route::get('/antri_bphtb', [Antrian::class, 'antri_bphtb']); // Update antrian BPHTB
Route::get('/antri_skpt', [Antrian::class, 'antri_skpt']); // Update antrian SKPT
Route::get('/reset_antrian/{layanan}', [Antrian::class, 'resetAntrian']); // Reset antrian ke 0