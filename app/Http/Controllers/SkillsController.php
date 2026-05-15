<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('pages.skills.skills', ['skills' => $skills]);
    }

    public function create()
    {
        return view('pages.skills.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'percentage' => 'required|string',
                'type' => 'required|string'
            ],
            [
                'required' => 'Este campo deve ser preenchido',
                'string' => 'Este campo deve ser do tipo string'
            ]
        );
        $name = $request->name;
        $percentage = $request->percentage;
        $type = $request->type;

        Skill::create([
            'name' => $name,
            'percentage' => $percentage,
            'type' => $type
        ])->save();
        return redirect()->route('admin.skills.index');
    }

    public function edit(int $id)
    {
        $skill = Skill::findOrFail($id);
        return view('pages.skills.edit', ['skill' => $skill]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'percentage' => 'required|string',
                'type' => 'required|string'
            ],
            [
                'required' => 'Este campo deve ser preenchido',
                'string' => 'Este campo deve ser do tipo string'
            ]
        );

        $skill = Skill::findOrFail($id);

        $name = $request->name;
        $percentage = $request->percentage;
        $type = $request->type;

        $skill->update([
            'name' => $name,
            'percentage' => $percentage,
            'type' => $type
        ]);
        return redirect()->route('admin.skills.index');
    }

    public function show(int $id)
    {
        $skill = Skill::findOrFail($id);

        return view('pages.skills.show', ['skill' => $skill]);
    }

    public function destroy(int $id)
    {
        $skill = Skill::findOrFail($id);

        $skill->delete();

        return redirect()->route('admin.skills.index');
    }
}
