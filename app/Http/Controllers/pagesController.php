<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{   
    public function home()
    {
        return view('index');
    }
    public function registration()
    {
        return view('pages.registration');
    }
    public function abstracts()
    {
        return view('pages.abstracts');
    }
    public function sponsor()
    {
        return view('pages.sponsors');
    }
    public function hotels()
    {
        return view('pages.hotels');
    }

    public function abstractssub(){

        return view('pages.abstract-page');
    }
    public function admin(){

        return view('pages.admin.index-admin');
    }

    public function showSignupForm()
    {
        return view('auth.signup'); 
    }

    public function showlogin()
    {
        return view('auth.login'); 
    }

    
}
