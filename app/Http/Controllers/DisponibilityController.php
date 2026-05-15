<?php

namespace App\Http\Controllers;

use App\Models\Disponibility;
use Illuminate\Http\Request;

class DisponibilityController extends Controller
{
    public function index()
    {
        $disponibility = Disponibility::find(1);
        return view("pages.disponibility.disponibility", [
            'disponibility' => $disponibility
        ]);
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'description' => 'required|string',
                'badges' => 'required|string',
                'link' => 'required|string'
            ],
            [
                'required' => 'Este campo deve ser preenchido',
                'string' => 'Este campo deve ser do tipo string'
            ]
        );
        $description = $request->description;
        $badges = $request->badges;
        $link = $request->link;

        Disponibility::updateOrCreate(
            [
                'id' => 1
            ],
            [
                'description' => $description,
                'badges' => $badges,
                'link' => $link,
            ]
        )->save();
        return redirect()->route('admin.disponibility.index');
    }
}
