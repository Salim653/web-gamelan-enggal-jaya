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