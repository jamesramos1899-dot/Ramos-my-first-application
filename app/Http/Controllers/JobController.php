<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        // this will load resources/views/jobs/index.blade.php
        return view('jobs.index');
    }
}
