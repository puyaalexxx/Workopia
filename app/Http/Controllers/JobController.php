<?php

namespace App\Http\Controllers;

class JobController extends Controller
{
    public function index()
    {
        $title = 'Available Jobs';
        $jobs = [
            'Software Engineer',
            'Web Developer',
            'Data Scientist',
        ];

        return view('jobs.index', compact('title', 'jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(string $id)
    {
        $job = [
            'id' => $id,
            'title' => 'Software Engineer',
            'description' => 'Develop and maintain software applications.',
        ];

        return view('jobs.show', compact('job'));
    }

    public function store(Request $request)
    {

    }
}
