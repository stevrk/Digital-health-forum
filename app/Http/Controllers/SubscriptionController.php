<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:subscriptions,email',
        ]);

        try {
            // Create a new record in the database
            $subscription = new Subscription();
            $subscription->first_name = $validatedData['first_name'];
            $subscription->last_name = $validatedData['last_name'];
            $subscription->email = $validatedData['email'];
            $subscription->save();

            // Redirect with success message
            return redirect()->back()->with('success_message', 'Your subscription has been successfully submitted.');

        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                // Handle duplicate entry error
                return redirect()->back()->with('email_error_message', 'This email address has already been used.');
            } else {
                // Handle other database errors
                return redirect()->back()->with('error_message', 'An error occurred. Please try again.');
            }
        }
    }
}
