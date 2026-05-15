<?php

namespace App\Http\Controllers;

use App\Models\Disponibility;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $disponibility = Disponibility::where('id', 1)->first();
        return view("landing", ['disponibility' => $disponibility]);
    }
}
