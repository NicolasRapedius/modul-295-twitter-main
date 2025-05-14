<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TweetFactory extends Factory
{
    public function definition()
    {
        return [
            'text' => $this->faker->realTextBetween(5, 160),
            'likes' => $this->faker->numberBetween(0, 5000),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => now(),
            'user_id' => User::factory(),
        ];
    }
}
