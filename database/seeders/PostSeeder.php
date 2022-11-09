<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $posts = Post::factory(100)->make();
       $posts = $posts->sortBy('created_at');
       foreach($posts as $post){
           $post->save();
       }
    }
}
