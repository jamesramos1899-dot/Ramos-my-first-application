<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

// Home page
Route::get('/', function () {
    return redirect()->route('jobs.index');
});

Route::resource('jobs', JobController::class);