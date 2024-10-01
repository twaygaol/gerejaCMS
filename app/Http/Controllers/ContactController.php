<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contactData = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Send email (optional)
        Mail::to('your-email@example.com')->send(new ContactMail($contactData));

        return back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
