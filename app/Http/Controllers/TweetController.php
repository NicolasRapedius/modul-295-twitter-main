<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Http\Resources\TweetResource;

class TweetController extends Controller
{
    public function index()
    {
        $tweets = Tweet::with('user')->take(100)->latest()->get();

        return TweetResource::collection($tweets);
    }
}
