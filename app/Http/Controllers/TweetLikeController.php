<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetLikeController extends Controller
{
    public function store(Tweet $tweet)
    {
        $tweet->like();

        return back();
    }

    public function destroy(Tweet $tweet)
    {
        $tweet->dislike();

        return back();
    }
}
