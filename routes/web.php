<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Employer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Homepage (welcome)
Route::get('/', function () {
    return view('welcome');
});

// Show all jobs
Route::get('/jobs', function () {
    return view('jobs.index', ['jobs' => Job::all()]);
});

// Show create job form
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Store new job
Route::post('/jobs', function (Request $request) {
    $data = $request->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
        'description' => ['nullable', 'string'],
    ]);

    // Ensure employer exists
    $employer = Employer::firstOrCreate(['name' => 'Default Employer']);

    Job::create(array_merge($data, [
        'employer_id' => $employer->id,
    ]));

    return redirect('/jobs');
});

// Show single job
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', ['job' => $job]);
});

// Show edit form
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

// Update job
Route::put('/jobs/{job}', function (Request $request, Job $job) {
    $data = $request->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
        'description' => ['nullable', 'string'],
    ]);

    $job->update($data);

    return redirect('/jobs/' . $job->id);
});

// Delete job
Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();
    return redirect('/jobs');
});
