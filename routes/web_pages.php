<?php

use Illuminate\Support\Facades\Route;

// Additional site pages
Route::view('/experiences', 'experiences.index')->name('experiences.index');
Route::get('/experiences/{slug}', function ($slug) {
    // Minimal lookup - in a real app you'd fetch from DB
    $items = [
        'cooking-class' => 'Cooking Class',
        'safari-tour' => 'Safari Tour',
        'spice-gardens' => 'Spice & Herbal Gardens',
        'village-walks' => 'Village Walks',
        'lake-activities' => 'Lake & Nature Activities',
    ];

    if (! array_key_exists($slug, $items)) {
        abort(404);
    }

    $title = $items[$slug];

    return view('experiences.show', compact('slug', 'title'));
})->name('experiences.show');

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
Route::view('/contact', 'contact')->name('contact');
