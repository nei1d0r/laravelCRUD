<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::where('owner_id', auth()->id())->get();
        // return $projects;
        return view('projects.index',['projects'=>$projects]);
    }
    public function create()
    {
        return view('projects.create');
    }
    
    public function store()
    {
    $attributes = request()->validate([
        'title' => ['required', 'min:3'],
        'description' => ['required', 'min:3']
    ]);

    Project::create($attributes);

    return redirect('/projects');
    }
}
