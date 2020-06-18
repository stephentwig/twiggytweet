<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    //

    public function store()
    {

        //because we are mass assigning turn off fillable
        // or set guarded to an empty array

        //validate the request
        request()->validate(['body' => 'required|max:255']);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => request('body')
        ]);

        return redirect('/home');

    }
}
