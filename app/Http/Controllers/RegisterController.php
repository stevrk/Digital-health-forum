<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Previous methods omitted for brevity

    public function submitRegistration(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:registrations,email',
            'phone' => 'required|string|max:20',
            'organization' => 'required|string|max:255',
        ]);

        // Store registration data in database using the model
        $registration = Registration::create($validatedData);

        // Redirect back with success message
        return redirect()->back()->with('success_reg', 'Registration is successful!');
    }

    public function approve($id)
    {
        $subscription = Registration::findOrFail($id);
        $subscription->status = 'approved';
        $subscription->save();

        return redirect()->back()->with('success', 'Registration approved successfully.');
    }
}
