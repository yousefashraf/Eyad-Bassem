<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'landing'])->name('landing');
Route::get('/evolved-balanced', [PageController::class, 'evolved'])->name('evolved');

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('pages', 'Admin\\PageManagementController');
        Route::resource('coaches', 'Admin\\CoachController');
        Route::resource('programs', 'Admin\\ProgramController');
        Route::resource('testimonials', 'Admin\\TestimonialController');
        Route::resource('faqs', 'Admin\\FAQController');
    });
});
