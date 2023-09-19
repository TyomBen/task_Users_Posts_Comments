<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        $user = User::find(1);
        Post::create([
            'user_id' => $user->id,
            'title' => Str::random(10),
            'content' => Str::random(10),
        ]);
    }
}
