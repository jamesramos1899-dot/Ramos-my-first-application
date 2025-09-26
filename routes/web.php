<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

// Home page
Route::get('/', function () {
    return view('welcome');
});

// All 7 CRUD routes for jobs in one line
Route::resource('jobs', JobController::class);
