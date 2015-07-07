<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;

class BlogControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_fetch_blog_posts_list()
    {
        $user = factory(User::class)->make();
        $this->actingAs($user)
             ->visit('/admin/blog');
    }

    /** @test */
    public function it_can_create_a_blog_post()
    {
        $user = factory(User::class)->make();
        $this->actingAs($user)
             ->visit('/admin/blog/create');
    }
}
