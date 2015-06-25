<?php

namespace App\Tests\Repositories;

use App\Tests\AbstractTestCase;

class PostRepositoryTest extends AbstractTestCase
{
    /** @test */
    public function it_loads_the_post_model()
    {
        $mock = \Mockery::mock('App\Repositories\PostRepository')->makePartial();
        $mock->shouldReceive('model')
            ->once()
            ->andReturn('App\Post');

        $this->assertEquals('App\Post', $mock->model());
    }
}
