<?php

namespace App\Http\Controllers;

use App\Tweet; // add the tweet model for it to access Tweet::
use Illuminate\Http\Request;

class TweetController extends Controller
{
    //

    public function store()
    {

        //because we are mass assigning turn off fillable
        // or set guarded to an empty array

        //validate the request
        $attributes = request()->validate(['body' => 'required|max:255']);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);

        return redirect('/home');

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
