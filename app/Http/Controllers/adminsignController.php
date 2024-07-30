<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class adminsignController extends Controller
{
    // Show the signup form
  
    // Handle the signup form submission
    public function signup(Request $request)
    {
        /*$request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins_tables',
            'password' => 'required|string|min:8|confirmed',
        ]);*/

        Admin::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return view('auth.signup');
    }
}
