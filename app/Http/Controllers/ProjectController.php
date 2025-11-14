<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // READ - lijst
    public function index()
    {
        $projects = Project::all(); // alle projecten

        return view('projects.index', compact('projects'));
    }

    // READ - detail
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    // CREATE - formulier tonen
    public function create()
    {
        return view('projects.create');
    }

    // CREATE - opslaan
    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_code' => 'required|unique:projects,project_code',
            'name' => 'required',
            'status' => 'required|in:planned,active,on_hold,completed,cancelled',
            'start_date' => 'required|date',
        ]);

        Project::create($validated);

        return redirect()->route('projects.index');
    }

    // UPDATE - formulier tonen
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    // UPDATE - opslaan
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'project_code' => 'required|unique:projects,project_code,' . $project->id,
            'name' => 'required',
            'status' => 'required|in:planned,active,on_hold,completed,cancelled',
            'start_date' => 'required|date',
        ]);

        $project->update($validated);

        return redirect()->route('projects.show', $project);
    }

    // DELETE
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
