<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PptFileController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/upload', [PptFileController::class, 'upload'])->name('upload');
Route::get('/download/{id}', [PptFileController::class, 'download'])->name('download');
