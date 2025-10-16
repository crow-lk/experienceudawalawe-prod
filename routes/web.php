<?php

use App\Http\Controllers\ExperienceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Experience routes
Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences.index');
Route::get('/experiences/{slug}', [ExperienceController::class, 'show'])->name('experiences.show');

// Additional page routes
require __DIR__.'/web_pages.php';
