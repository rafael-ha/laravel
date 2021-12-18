<?php

namespace App\Http\Controllers;

use App\Images;
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
    protected $redirectTo = '/';
    public function index()
    {
        $images = Images::orderBy('id', 'desc')->paginate(5);
        return view('home',compact('images'));
    }
}
