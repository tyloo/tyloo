<?php

namespace Tests;

use Mockery;

class TagTest extends AbstractTestCase
{
    public function tearDown()
    {
        Mockery::close();
    }

    /** @test */
    public function it_has_posts()
    {
        $mock = Mockery::mock('App\Tag')->makePartial();
        $mock->shouldReceive('belongsToMany')
            ->once()
            ->with('App\Post', 'post_tag')
            ->andReturn('mocked');

        $this->assertEquals('mocked', $mock->posts());
    }

    /** @test */
    public function it_has_works()
    {
        $mock = Mockery::mock('App\Tag')->makePartial();
        $mock->shouldReceive('belongsToMany')
            ->once()
            ->with('App\Work', 'work_tag')
            ->andReturn('mocked');

        $this->assertEquals('mocked', $mock->works());
    }
}
