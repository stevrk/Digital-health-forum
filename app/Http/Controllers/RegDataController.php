<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationList;

class RegDataController extends Controller
{
    public function index()
    {
       // $registrations = RegistrationList::all(); // Fetch all registrations
       $pendingRegistrations = RegistrationList::where('status', 'pending')->get();
       $approvedRegistrations = RegistrationList::where('status', 'approved')->get();
        return view('pages.reg.registrations', compact('pendingRegistrations', 'approvedRegistrations'));
    }
    public function index2()
    {
        //$registrations = RegistrationList::all(); // Fetch all registrations
       $pendingRegistrations = RegistrationList::where('status', 'pending')->get();
       $approvedRegistrations = RegistrationList::where('status', 'approved')->get();
       $allRegistrations = RegistrationList::orderBy('created_at', 'desc')->get();

       


        return view('pages.admin.Registrations', compact('allRegistrations','pendingRegistrations', 'approvedRegistrations'));
    }

    public function approve($id)
    {
        $registration = RegistrationList::findOrFail($id);
        $registration->status = 'approved';
        $registration->save();
         //return view('pages.admin.Registrations');

        return redirect()->route('registrations.admin')->with('success_message', 'Registration approved successfully.');
    }
    public function approve2($id)
    {
        $registration = RegistrationList::findOrFail($id);
        $registration->status = 'approved';
        $registration->save();
         //return view('pages.admin.Registrations');

        return  view('pages.admin.Registrations')->with('success_message', 'Registration approved successfully.');
    }
   
}
