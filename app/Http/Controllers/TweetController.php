<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetController extends Controller
{
    public function index()
    {
        // Fetch the latest 100 tweets with their associated user
        $tweets = Tweet::with('user')->latest()->take(100)->get();

        // Map the tweets to include user data
        $tweets = $tweets->map(function ($tweet) {
            $tweet->user = [
                'id' => $tweet->user->id,
                'name' => $tweet->user->name,
            ];
            return $tweet;
        });

        // Return the tweets in the desired format
        return ['data' => $tweets];
    }
}
