<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class subcriptionListController extends Controller

{
    public function index()
    {
        $subscriptions = Subscription::orderBy('created_at', 'desc')->get();
       

        //return view('subscriptions.index', compact('subscriptions'));

        return view('pages.admin.Subscriptions', compact('subscriptions'));
    }
    public function approve($id)
    {
        $subscription = Subscription::findOrFail($id);
        $subscription->status = 'approved';
        $subscription->save();

        return redirect()->back()->with('success', 'Subscription approved successfully.');
    }

   
}
