<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tel' => 'nullable|string|max:20',
            'project-name' => 'nullable|string|max:255',
            'message' => 'required|string',
            'acceptance' => 'required|accepted',
        ]);

        Mail::to('engage@roots.ventures')->send(new ContactFormMail($validatedData));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}