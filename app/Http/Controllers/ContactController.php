<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail; // Add this line
use App\Models\ContactForm; // Import the ContactForm model

class ContactController extends Controller
{
    public function index()
    {
        $posts_all = Contact::all();
        $data = [
            'posts_all' => $posts_all
        ];

        return view('contact', ['data' => $data]);
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'nullable',
            'message' => 'nullable'
        ]);

        // Sanitize input
        $sanitizedData = $request->only(['name', 'email', 'subject', 'message']);
        $sanitizedData['name'] = htmlspecialchars($sanitizedData['name'], ENT_QUOTES, 'UTF-8');
        $sanitizedData['email'] = htmlspecialchars($sanitizedData['email'], ENT_QUOTES, 'UTF-8');
        $sanitizedData['subject'] = htmlspecialchars($sanitizedData['subject'], ENT_QUOTES, 'UTF-8');
        $sanitizedData['message'] = htmlspecialchars($sanitizedData['message'], ENT_QUOTES, 'UTF-8');

        // Save contact form data to database
        ContactForm::create($sanitizedData);

        try {
            // Send email
            Mail::to('info.isernepal@gmail.com')->send(new ContactFormMail($sanitizedData));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'There was an issue sending your message. Please try again later.');
        }

        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
