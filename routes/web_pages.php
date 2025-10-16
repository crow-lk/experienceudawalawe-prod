<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExperienceController;

// Additional site pages
Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences.index');
Route::get('/experiences/{experience:slug}', [ExperienceController::class, 'show'])->name('experiences.show');

Route::view('/dining', 'dining')->name('dining');
Route::redirect('/community', '/sustainability');
Route::view('/sustainability', 'sustainability.index')->name('sustainability');
Route::view('/sustainability/reduction-of-single-use-plastics', 'sustainability.plastics')->name('sustainability.plastics');
Route::view('/sustainability/entrepreneurship-opportunities', 'sustainability.entrepreneurship')->name('sustainability.entrepreneurship');
Route::view('/sustainability/eco-friendly-construction', 'sustainability.construction')->name('sustainability.construction');
Route::view('/sustainability/community-engagement', 'sustainability.community')->name('sustainability.community');
Route::view('/sustainability/global-goals', 'sustainability.sdgs')->name('sustainability.sdgs');
Route::view('/stories', 'stories.index')->name('stories.index');
Route::view('/gallery', 'gallery')->name('gallery');
Route::view('/about', 'about')->name('about');
Route::view('/faq', 'faq')->name('faq');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
