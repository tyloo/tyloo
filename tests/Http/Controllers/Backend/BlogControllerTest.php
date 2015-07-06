<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;

class BlogControllerTest extends AbstractTestCase
{
    protected $user;

    public function setUp()
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
    }

    /** @test */
    public function it_can_fetch_blog_posts_list()
    {
        $this->actingAs($this->user)
             ->visit('/admin/blog');
    }

    /** @test */
    public function it_can_create_a_blog_post()
    {
        $this->actingAs($this->user)
             ->visit('/admin/blog/create');
    }
}
