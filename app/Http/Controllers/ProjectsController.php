<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

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
    	$project = new Project;
    	$project->title = request()->title;
    	$project->description = request()->description;
    	$project->due_date = request()->due_date;
    	$project->save();
    	return redirect('/projects');
    }
}
