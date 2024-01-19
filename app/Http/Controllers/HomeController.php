<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

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

    public function crew()
    {
        return view('landing.crew');
    }

    public function event()
    {
        $path = base_path('data/event.json');
        $jsonData = file_get_contents($path);
        $event = json_decode($jsonData, true); // konversi ke array asosiatif
        return view('landing.event', compact('event'));
    }
    public function galery()
    {
        $path = base_path('data/galery.json');
        $jsonData = file_get_contents($path);
        $galery = json_decode($jsonData, true); // konversi ke array asosiatif
        // dd($galery);
        return view('landing.galery', compact('galery'));
    }
}
