<?php

namespace App\Tests;

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
            ->with('App\Post')
            ->andReturn('mocked');

        $this->assertEquals('mocked', $mock->posts());
    }
}
