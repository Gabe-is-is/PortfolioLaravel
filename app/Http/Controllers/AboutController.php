<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::find(1);

        return view("form", ['about' => $about]);
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'about_me' => 'required|string',
                'location' => 'required|string',
                'experience' => 'required|string',
                'education' => 'required|string'
            ],
            [
                'required' => 'Este campo deve ser preenchido',
                'string' => 'O campo deve ser do tipo string'
            ]
        );
        $aboutMe = $request->about_me;
        $location = $request->location;
        $experience = $request->experience;
        $education = $request->education;

        About::updateOrCreate([
            'id' => 1
        ], [
            'about_me' => $aboutMe,
            'location' => $location,
            'experience' => $experience,
            'education' => $education
        ]);

        return redirect()->route('admin.about.index');
    }
}
