<?php

namespace App\Tests;

use Mockery;

class PostTest extends AbstractTestCase
{
    public function tearDown()
    {
        Mockery::close();
    }

    /** @test */
    public function it_has_an_author()
    {
        $mock = Mockery::mock('App\Post')->makePartial();
        $mock->shouldReceive('belongsTo')
            ->once()
            ->with('App\User')
            ->andReturn('mocked');

        $this->assertEquals('mocked', $mock->author());
    }

    /** @test */
    public function it_has_tags()
    {
        $mock = Mockery::mock('App\Post')->makePartial();
        $mock->shouldReceive('belongsToMany')
            ->once()
            ->with('App\Tag')
            ->andReturn('mocked');

        $this->assertEquals('mocked', $mock->tags());
    }
}

