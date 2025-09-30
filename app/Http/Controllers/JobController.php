<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Employer;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Show all jobs (Read - list)
    public function index()
    {
        // Fetch all jobs with their employer
        $jobs = Job::with('employer')->paginate(10);
        return view('jobs.index', compact('jobs'));
    }

    // Show a single job (Read - detail)
    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    // Show create form (Create - form)
    public function create()
    {
        // Fetch all employers for dropdown
        $employers = Employer::all();
        return view('jobs.create', compact('employers'));
    }

    // Store a new job (Create - save)
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => ['required', 'min:3'],
            'salary'      => ['required'],
            'employer_id' => ['required', 'exists:employers,id'],
        ]);

        Job::create($data);

        return redirect()->route('jobs.index')->with('success', 'Job created successfully!');
    }

    // Show edit form (Update - form)
    public function edit(Job $job)
    {
        $employers = Employer::all();
        return view('jobs.edit', compact('job', 'employers'));
    }

    // Update existing job (Update - save)
    public function update(Request $request, Job $job)
    {
        $data = $request->validate([
            'title'       => ['required', 'min:3'],
            'salary'      => ['required'],
            'employer_id' => ['required', 'exists:employers,id'],
        ]);

        $job->update($data);

        return redirect()->route('jobs.show', $job)->with('success', 'Job updated successfully!');
    }

    // Delete a job (Delete)
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully!');
    }
}
