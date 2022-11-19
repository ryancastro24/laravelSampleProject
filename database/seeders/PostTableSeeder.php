<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        $posts = [
            [
                'title' => 'Post one',
                'excerpt' => 'excerpt no 1',
                'body' => 'body one',
                'min_to_read' => 2,
                'img_path' => 'img path one',
                'is_published' => false
            ],
            [
                'title' => 'Post two',
                'excerpt' => 'excerpt no 2',
                'body' => 'body two',
                'min_to_read' => 3,
                'img_path' => 'img path two',
                'is_published' => true
            ]
            ];

        foreach($posts as $key => $value){
            Post::create($value);
        }
    }
}
