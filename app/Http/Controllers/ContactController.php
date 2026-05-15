<?php

namespace App\Http\Controllers;

use App\Models\Contactinfo;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contactinfo::find(1);

        return view("contact", ['contact' => $contact]);
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'location' => 'required|string',
                'email' => 'required|email:rfc,dns',
                'phone' => 'required|string',
                'schedule' => 'required|string'
            ],
            [
                'required' => 'Este campo deve ser preenchido',
                'string' => 'O campo deve ser do tipo string',
                'email.email' => 'O email digitado não é válido'
            ]
        );
        $location = $request->location;
        $email = $request->email;
        $phone = $request->phone;
        $schedule = $request->schedule;

        Contactinfo::updateOrCreate([
            'id' => 1
        ], [
            'location' => $location,
            'email' => $email,
            'phone' => $phone,
            'schedule' => $schedule
        ]);
        return redirect()->route('admin.contact.info');
    }
}
