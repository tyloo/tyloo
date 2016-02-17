<?php

use App\Post;
use App\Tag;
use App\Work;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tag::class, 10)->create();

        $works = Work::all();
        foreach ($works as $work) {
            $tags = Tag::orderByRaw('RAND()')->take(rand(1, 5))->get(['id']);
            $work->tags()->sync($tags);
        }

        $posts = Post::all();
        foreach ($posts as $post) {
            $tags = Tag::orderByRaw('RAND()')->take(rand(1, 5))->get(['id']);
            $post->tags()->sync($tags);
        }
    }
}
