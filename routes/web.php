<?php

use App\Http\Controllers\pesertaController;
use App\Http\Controllers\suratController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

//peserta
route::get('/tabel-peserta', [pesertaController::class, 'index']);
route::get('/form-peserta', [pesertaController::class, 'form']);
route::post('storepeserta', [pesertaController::class, 'store'])->name('peserta.store');

//surat
route::get('/tabel-surat', [suratController::class, 'index']);
route::get('/form-surat', [suratController::class, 'form']);
route::post('storesurat', [suratController::class, 'store'])->name('surat.store');
