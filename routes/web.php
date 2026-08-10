<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Preview routes for converted HTML -> Blade pages
Route::view('/evolved-and-balanced', 'pages.evolved-and-balanced')->name('evolved');
Route::view('/nutrition-assessment', 'pages.nutrition-assessment')->name('nutrition');
