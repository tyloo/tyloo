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

        factory(App\Post::class, 30)->create();
        factory(App\Post::class, 10)->create(['type' => 'work']);
    }
}
