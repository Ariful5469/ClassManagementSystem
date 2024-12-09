<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PptFileController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Import Auth Facade

// Welcome Route
Route::get('/', function () {
    return view('welcome');
});

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Conditional Dashboard View Based on User Type
    Route::get('/dashboard', function () {
        $userType = Auth::user()->user_type; // Fetch the user_type from the authenticated user

        if ($userType == 'teacher') {
            return view('index'); // Teacher's view
        } elseif ($userType == 'student') {
            return view('index1'); // Student's view
        }
        elseif ($userType == 'chairman') {
            return view('index2'); // Student's view
        }
        
        // Handle invalid user_type
        abort(403, 'Unauthorized access - Invalid user type');
    })->name('dashboard');



    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');

        
        // Store a comment (only students can post)
        Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
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



    // Profile Management Routes
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

// For viewing routine (accessible to all)
Route::get('/routine', function () {
    return view('routine');
});

// Route for viewing teacher details (only accessible for authorized users)
Route::get('/teachers-details', function () {
    return view('teachers-details');
});

// Download Files
Route::get('/download/{id}', [PptFileController::class, 'download'])->name('download');
Route::get('/download2/{id}', [PptFileController::class, 'downloadFromTable2'])->name('download2');
// Include authentication routes
require __DIR__ . '/auth.php';


