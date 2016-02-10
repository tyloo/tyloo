<?php

use App\Post;
use App\Topic;
use App\Work;
use Illuminate\Database\Seeder;

class TopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Topic::class, 10)->create();

        $posts = Post::all();

        foreach ($posts as $post) {
            $topics = Topic::orderByRaw('RAND()')->take(rand(1, 5))->get(['id']);
            $post->topics()->sync($topics);
        }
    }
}
