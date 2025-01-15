<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        // $projects = Project::latest()->take(5)->get();
        // return view('frontend.index', compact('projects'));
        return view('frontEnd.index');
    }

    public function projects()
    {
        $projects = Project::all();
        return view('frontend.projects', compact('projects'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function sendContactMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'nullable|string|max:255', // Add validation for subject
            'message' => 'required|string',
        ]);

        // Save the message to the database
        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'] ?? null, // Handle optional subject
            'message' => $validated['message'],
        ]);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
