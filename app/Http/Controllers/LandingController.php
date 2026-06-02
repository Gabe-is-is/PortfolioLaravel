<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contactinfo;
use App\Models\Disponibility;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $disponibility = Disponibility::where('id', 1)->first();
        $about = About::findOrFail(1);
        $skills = Skill::all();
        $projects = Project::with(['images'])->get();
        $contactInfo = Contactinfo::findOrFail(1);
        return view("landing", [
            'disponibility' => $disponibility,
            'about' => $about,
            'skills' => $skills,
            'projects' => $projects,
            'contactInfo' => $contactInfo
        ]);
    }

    public function index2() {
        $contactInfo = Contactinfo::findOrFail(1);
        return response()->json(['contactInfo' => $contactInfo], 200);
    }
}
