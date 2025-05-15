<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/gamelan', function () {
    return view('gamelan');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/contact', function () {
    return view('contact');
});

use App\Http\Controllers\ContactController;
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

use App\Http\Controllers\NewsletterController;
Route::post('/subscribe', [NewsletterController::class, 'store'])->name('newsletter.store');