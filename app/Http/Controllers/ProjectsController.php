<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('pages.projects.index', ['projects' => $projects]);
    }

    public function create()
    {
        return view('pages.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'description' => 'required|string',
                'link_demo' => 'required|string',
                'link_code' => 'required|string',
                'alt' => 'required|string',
                'imageble' => 'required|mimes:jpg,jpeg,png,webp',
            ],
            [
                'required' => 'Este campo deve ser preenchido',
                'string' => 'Este campo deve ser do tipo string',
                'mimes' => 'O tipo de arquivo não é válido'
            ]
        );

        $name = $request->name;
        $description = $request->description;
        $link_demo = $request->link_demo;
        $link_code = $request->link_code;
        $alt = $request->alt;

        $project = new Project();
        $project->name = $name;
        $project->description = $description;
        $project->link_demo = $link_demo;
        $project->link_code = $link_code;

        $project->save();

        $path = $request->file('imageble')->store('images', 'public');

        $project->images()->create([
            'image' => $path,
            'alt' => $alt
        ])->save();

        return redirect()->route('admin.projects.index');
    }

    public function show(int $id)
    {

        $project = Project::findOrFail($id);
        return view('pages.projects.show', ['project' => $project]);
    }

    public function edit(int $id)
    {
        $project = Project::with(['images'])->findOrFail($id);
        return view('pages.projects.edit', ['project' => $project]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'description' => 'required|string',
                'link_demo' => 'required|string',
                'link_code' => 'required|string',
                'alt' => 'required|string',
                'imageble' => 'nullable|mimes:jpg,jpeg,png,webp'
            ],
            [
                'required' => 'Este campo deve ser preenchido',
                'string' => 'Este campo deve ser do tipo string',
                'mimes' => 'O tipo de arquivo não é válido'
            ]
        );

        $project = Project::findOrFail($id);

        $name = $request->name;
        $description = $request->description;
        $link_demo = $request->link_demo;
        $link_code = $request->link_code;
        $alt = $request->alt;

        if ($request->file('imageble')) {
            $path = $request->file('imageble')->store('images', 'public');

            $project->images()->update([
                'image' => $path,
                'alt' => $alt
            ]);
        } else {
            $project->images()->update([
                'alt' => $alt
            ]);
        }


        $project->update([
            'name' => $name,
            'description' => $description,
            'link_demo' => $link_demo,
            'link_code' => $link_code
        ]);
        return redirect()->route('admin.projects.index');
    }

    public function destroy(int $id)
    {
        $projects = Project::findOrFail($id);
        $projects->delete();
        return redirect()->route('admin.projects.index');
    }
}
