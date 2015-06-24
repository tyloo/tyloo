<?php

namespace App\Tests\Integration;

use App\Tests\AbstractTestCase;

class BlogControllerTest extends AbstractTestCase
{
    /**
     * @test
     */
    public function it_can_hit_blog_page()
    {
        $this->visit('/blog')
             ->seePageIs('/blog');
    }
}

