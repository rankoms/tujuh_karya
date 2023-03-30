<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('landing.index');
    }

    public function event()
    {
        return view('landing.event');
    }
    public function galery()
    {
        return view('landing.galery');
    }
}
