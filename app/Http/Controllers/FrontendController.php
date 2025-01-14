<?php

namespace App\Http\Controllers;

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
            'message' => 'required|string',
        ]);

        // Handle contact message (e.g., send email or store in DB)
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
