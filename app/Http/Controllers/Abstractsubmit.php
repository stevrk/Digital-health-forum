<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbstractSubmission; // Assuming your model is named AbstractSubmission

class Abstractsubmit extends Controller
{
    public function abstractsubmit(Request $request)
    {
        // Validate the form data including the file upload
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'organization' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'abstract_file' => 'required|file|mimes:doc,docx,pdf|max:2048', // File validation
        ]);

        // Store the uploaded file
        $filePath = $request->file('abstract_file')->store('abstracts', 'public');

        // Store the abstract information including file path
        $abstract = new AbstractSubmission();
        $abstract->name = $request->input('name');
        $abstract->phone = $request->input('phone');
        $abstract->email = $request->input('email');
        $abstract->organization = $request->input('organization');
        $abstract->title = $request->input('title');
        $abstract->file_path = $filePath; // Store file path
        $abstract->download_status = 'pending'; // Initial status

        $abstract->save();

        // Return a success response
        return redirect()->back()->with('message', 'Abstract submitted successfully.');
    }
}
