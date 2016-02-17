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
        $mock->shouldReceive('morphedByMany')
            ->once()
            ->with('App\Post', 'taggable')
            ->andReturn('mocked');

        $this->assertEquals('mocked', $mock->posts());
    }

    /** @test */
    public function it_has_works()
    {
        $mock = Mockery::mock('App\Tag')->makePartial();
        $mock->shouldReceive('morphedByMany')
            ->once()
            ->with('App\Work', 'taggable')
            ->andReturn('mocked');

        $this->assertEquals('mocked', $mock->works());
    }
}
