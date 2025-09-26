<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Employer;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Show all jobs
    public function index()
    {
        $jobs = Job::with('employer')->get();
        return view('jobs.index', ['jobs' => $jobs]);
    }

    // Show create form
    public function create()
    {
        return view('jobs.create');
    }

    // Store a new job
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => ['required', 'min:3'],
            'salary'      => ['required'],
            'description' => ['nullable', 'string'],
        ]);

        // make sure employer exists
        $employer = Employer::firstOrCreate(['name' => 'Default Employer']);

        Job::create(array_merge($data, [
            'employer_id' => $employer->id,
        ]));

        return redirect()->route('jobs.index');
    }

    // Show single job
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    // Show edit form
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    // Update existing job
    public function update(Request $request, Job $job)
    {
        $data = $request->validate([
            'title'       => ['required', 'min:3'],
            'salary'      => ['required'],
            'description' => ['nullable', 'string'],
        ]);

        $job->update($data);

        return redirect()->route('jobs.show', $job);
    }

    // Delete job
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('jobs.index');
    }
}
