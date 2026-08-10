<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// New converted pages
Route::view('/evolved', 'evolved-and-balanced');
Route::view('/nutrition', 'nutrition-assessment');
