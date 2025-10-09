<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Additional page routes
require __DIR__.'/web_pages.php';
