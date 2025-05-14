<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()
            ->count(20)
            ->hasTweets(30)
            ->create();
    }
}
