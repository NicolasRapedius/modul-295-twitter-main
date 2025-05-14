<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Http\Resources\TweetResource; // Import the TweetResource
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        return UserResource::make(User::findOrFail($id));
    }

    public function tweets($id)
    {
        $user = User::findOrFail($id);

        $tweets = $user->tweets()->latest()->take(10)->get();

        return TweetResource::collection($tweets);
    }
}
