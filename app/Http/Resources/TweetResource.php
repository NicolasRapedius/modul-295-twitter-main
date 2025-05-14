<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TweetResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'text' => $this->text,
            'likes' => $this->likes,
            'created_at' => $this->created_at->toIso8601String(),
            'user' => UserResource::make($this->user),
        ];
    }
}
