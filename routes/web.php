<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'heading' => 'Welcome to OpportuNet 🤖',
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'title' => 'Jobs',
        'heading' => 'Available Jobs',
        // ✅ Use eager loading for employer and tags
        'jobs' => Job::with(['employer', 'tags'])->paginate(10), // <- Pagination added
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'title' => 'Job Details',
        'heading' => 'Job Information',
        'job' => Job::with(['employer', 'tags'])->findOrFail($id),
    ]);
});
