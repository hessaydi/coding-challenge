<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        Post::truncate();
        Post::create([
            'title' => 'Shop 1',
        ]);
        Post::create([
            'title' => 'Shop 2',
        ]);
        Post::create([
            'title' => 'Shop 3',
        ]);
        Post::create([
            'title' => 'Shop 4',
        ]);
        Post::create([
            'title' => 'Shop 5',
        ]);
        Post::create([
            'title' => 'Shop 6',
        ]);
        Post::create([
            'title' => 'Shop 7',
        ]);
        Post::create([
            'title' => 'Shop 8',
        ]);
        Post::create([
            'title' => 'Shop 9',
        ]);
    }
}
