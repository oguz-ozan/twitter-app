<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TweetController extends Controller
{
    public function store(){
        $attributes = request()->validate([
            'body' => 'required|max:255'
        ]);

        // dd(strip_tags(request('body')));

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);

        return redirect('/tweets');
    }

    public function index(){
        // $var = htmlspecialchars("<p>adasd</p>");
        // dd($var);
        return view('tweet.index', ['tweets' => current_user()->timeline()]);
    }
}
