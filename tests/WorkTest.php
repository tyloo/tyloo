<?php

namespace App\Tests;

use Mockery;

class WorkTest extends AbstractTestCase
{
    public function tearDown()
    {
        Mockery::close();
    }

    /** @test */
    public function it_has_an_author()
    {
        $mock = Mockery::mock('App\Work')->makePartial();
        $mock->shouldReceive('belongsTo')
            ->atLeast()
            ->once()
            ->with('App\User')
            ->andReturn('mocked');

        $this->assertEquals('mocked', $mock->author());
    }
}

