<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Homepage
Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'heading' => 'Welcome to OpportuNet 🤖',
    ]);
});

// All Jobs
Route::get('/jobs', function () {
    return view('jobs', [
        'title' => 'Jobs',
        'heading' => 'Available Jobs',
        'jobs' => Job::all(),
    ]);
});

// Single Job (dynamic by ID)
Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'title' => 'Job Details',
        'heading' => 'Job Information',
        'job' => Job::find($id),
    ]);
});
