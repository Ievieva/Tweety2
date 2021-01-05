<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index(): Renderable
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate(['body' => 'required|max:255']);
        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);

        return redirect('/tweets');
    }
}
