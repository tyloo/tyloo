<?php

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
        DB::table('posts')->truncate();
        DB::table('tags')->truncate();

        factory(App\Post::class, 50)
            ->create()
            ->each(function (App\Post $p) {
                $p->tags()->save(factory(App\Tag::class)->make());
            });
    }
}
