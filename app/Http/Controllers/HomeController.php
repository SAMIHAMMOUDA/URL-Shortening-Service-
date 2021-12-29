<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use App\Models\User;
use Illuminate\Http\Request;

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
        return view('home');
    }


    public function dashboard()
    {
        return view('dashboard')
          ->with('link_count' , ShortLink::all()->count() )
          ->with('user_count' , User::all()->count() );
    }
}
