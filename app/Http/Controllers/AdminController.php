<?php
namespace App\Http\Controllers;

use App\Models\Abstract_fetcher;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a list of all abstract submissions.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch all abstracts from the database
        $abstracts = Abstract_fetcher::all();

        $unseenAbstracts = Abstract_fetcher::where('download_status', 'pending')->get();
        $seenAbstracts = Abstract_fetcher::where('download_status', 'downloaded')->get();
    
       
        
      
        return view('pages.admin-index', compact('unseenAbstracts', 'seenAbstracts'));
    }
    public function index1()
    {
        // Fetch all abstracts from the database
        $abstracts = Abstract_fetcher::orderBy('created_at', 'desc')->get();

        $unseenAbstracts = Abstract_fetcher::where('download_status', 'pending')->get();
        $seenAbstracts = Abstract_fetcher::where('download_status', 'downloaded')->get();
    
       
        
      
        return view('pages.admin.Abstracts', compact('abstracts','unseenAbstracts','seenAbstracts'));
    }

    /**
     * Display details of a specific abstract submission.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Fetch a single abstract submission by id
        $abstracts = Abstract_fetcher::findOrFail($id);

        // Pass the single abstract instance to the view
        return view('layouts.admin', compact('abstracts'));
    }
    public function mark($id)
{
    $abstract = Abstract_fetcher::findOrFail($id);
    $abstract->status = 'read';
    $abstract->save();

    return redirect()->back()->with('success_message', 'Abstract marked as seen.');
}
   
}
