<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

     public function about()
    {
        return view('about');
    }

    public function subject()
    {
        return view('subject');
    }

     public function sm()
    {
        return view('sm');
    }

    public function educ()
    {
        return view('educ');
    }

     public function aboutphp2()
    {
        return view('aboutphp2');
    }
}
