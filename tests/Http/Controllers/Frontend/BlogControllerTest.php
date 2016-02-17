<?php

namespace App\Tests\Http\Controllers\Frontend;

use App\Post;
use App\Tag;
use App\User;
use Tests\AbstractTestCase;

class BlogControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_has_an_index_page_listing_blog_posts()
    {
        $user = factory(User::class)->create();
        $posts = factory(Post::class, 10)->create(['author_id' => $user->id]);
        $tag = factory(Tag::class)->create();
        $tag->posts()->sync($posts);

        $this->visit('/blog');
        $this->assertViewHas('posts');
    }

    /** @test */
    public function it_has_a_page_showing_a_single_post()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create(['author_id' => $user->id]);
        $this->visit('/blog/'.$post->slug);
        $this->assertViewHas('post');
    }

    /** @test */
    public function it_has_a_page_listing_posts_from_a_tag()
    {
        $tag = factory(Tag::class)->create();
        $this->visit('/blog/tag/'.$tag->slug);
        $this->assertViewHas('posts');
    }
}
