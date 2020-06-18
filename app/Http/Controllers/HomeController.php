<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        // to the get the latest tweets first
       // $tweets = Tweet::latest()->get();

        return view('home',[
            //user() is being called from the Tweet model
            'tweets' => auth()->user()->timeline()
        ]);
    }
}
