<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'heading' => 'Welcome to OpportuNet 🤖',
    ]);
});

// Fetch all jobs from DB
Route::get('/jobs', function () {
    return view('jobs', [
        'title' => 'Jobs',
        'heading' => 'Available Jobs',
        'jobs' => Job::with(['employer', 'tags'])->get(),
    ]);
});

// Fetch single job by ID
Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'title' => 'Job Details',
        'heading' => 'Job Information',
        'job' => Job::with(['employer', 'tags'])->findOrFail($id),
    ]);
});
