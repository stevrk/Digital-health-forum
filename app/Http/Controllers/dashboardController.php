<?php

namespace App\Http\Controllers;
use App\Models\Abstract_fetcher;
use App\Models\RegistrationList;
use App\Models\Subscription;


use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $subscriptionsCount = Subscription::count();
        $registrationsCount = RegistrationList::count();
        $abstractsCount = Abstract_fetcher::count();

        return view('pages.admin.index-admin', compact('subscriptionsCount', 'registrationsCount', 'abstractsCount'));
    }
}
