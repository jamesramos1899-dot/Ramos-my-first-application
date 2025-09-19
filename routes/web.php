<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'heading' => 'Welcome to our OpportuNet',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'heading' => 'About Us',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'heading' => 'Contact Us',
    ]);
});
