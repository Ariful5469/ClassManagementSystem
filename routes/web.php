<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PptFileController;

// Index Page
Route::get('/', function () {
    return view('index'); // Home page with buttons
});

// Upload Slide Page (Table 1)
Route::get('/upload-slide', function () {
    return view('Upload Slide Page'); // Blade file for uploading slides to Table 1
})->name('upload.slide');

Route::post('/upload/table1', [PptFileController::class, 'uploadToTable1'])->name('upload.table1');

// Upload Attendance Page (Table 2)
Route::get('/upload-attendance', function () {
    return view('Upload Attendance Page'); // Blade file for uploading attendance files to Table 2
})->name('upload.attendance');

Route::post('/upload/table2', [PptFileController::class, 'uploadToTable2'])->name('upload.table2');

// Show Slides Page (From Table 1)
Route::get('/show-slides', function () {
    return view('Show Slides Page'); // Blade file to display slides from Table 1
})->name('show.slides');

// Show Attendance Page (From Table 2)
Route::get('/show-attendance', function () {
    return view('Show Attendance Page'); // Blade file to display attendance files from Table 2
})->name('show.attendance');

// Download Files
Route::get('/download/{id}', [PptFileController::class, 'download'])->name('download');
Route::get('/download2/{id}', [PptFileController::class, 'downloadFromTable2'])->name('download2');
