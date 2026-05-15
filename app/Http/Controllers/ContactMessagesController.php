<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactMessagesController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view("pages.contacts.contacts", ['contacts' => $contacts]);
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email:rfc,dns',
                'subject' => 'required|string',
                'message' => 'required|string'
            ],
            [
                'required' => 'Este campo deve ser preenchido',
                'string' => 'Este campo deve ser do tipo string',
                'email.email' => 'O email digitado não é válido'
            ]
        );
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        Contact::create([
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        ])->save();
        return redirect()->route('landing');
    }

    public function show(int $id)
    {
        $contactsShow = Contact::findOrFail($id);

        return view("pages.contacts.show", ['contactsShow' => $contactsShow]);
    }

    public function delete(int $id)
    {
        $contactMessage = Contact::findOrFail($id);

        $contactMessage->delete();
        return back(302);
    }
}
