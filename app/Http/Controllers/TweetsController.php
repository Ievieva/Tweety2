<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    public function index(): Renderable
    {
        return view('tweets.index', [
            'tweets' => current_user()->timeline()
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate(['body' => 'required|max:255']);
        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);

        return redirect()->route('home');
    }
}
