<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*    public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function resume()
    {
        return view('resume-page');
    }

    public function resumeview()
    {
        return view('resume');
    }

    public function privacypolicy()
    {
        return view('privacy');
    }

}
