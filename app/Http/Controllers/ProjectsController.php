<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{

    public function index()
    {
    	$projects = Project::all();
    	return view('projects.index')->with('projects', $projects);
    }

    public function create()
    {
    	return view('projects.create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'due_date' => 'required'
        ]);
        
    	$project = new Project;
    	$project->title = request()->title;
    	$project->description = request()->description;
    	$project->due_date = request()->due_date;
    	$project->save();

    	return redirect('/projects');
    }
    
    public function show(Project $project)
    {
    	return view('projects.show')->with('project', $project);
    }
    
    public function edit(Project $project)
    {
        return view('projects.edit')->with('project', $project);
    }

    public function update(Project $project)
    {
        $project->title = request()->title;
        $project->description = request()->description;
        $project->due_date = request()->due_date;
        $project->save();
        return redirect('/projects');
    }
}
