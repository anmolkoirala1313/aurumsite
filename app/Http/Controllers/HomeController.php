<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\User;
use App\Models\Award;
use App\Models\Page;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $client_count =     Client::count();
        $user_count   =     User::count();
        $award_count  =     Award::count();
        $page_count   =     Page::count();
        $latestPosts  =     Blog::orderBy('created_at', 'DESC')->take(3)->get();
        $latestPages  =     Page::orderBy('created_at', 'DESC')->take(4)->get();
        $latestUsers  =     User::orderBy('created_at', 'DESC')->take(4)->get();

        
        return view('backend.dashboard',compact('latestUsers','latestPages','client_count','user_count','award_count','page_count','latestPosts'));

    }
}
