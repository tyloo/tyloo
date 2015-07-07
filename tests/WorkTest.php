<?php

namespace App\Tests;

use App\User;
use App\Work;
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
        $mock = Mockery::mock(Work::class)->makePartial();
        $mock->shouldReceive('belongsTo')
            ->atLeast()
            ->once()
            ->with(User::class)
            ->andReturn('mocked');

        $this->assertEquals('mocked', $mock->author());
    }

    /** @test */
    public function it_displays_published_state()
    {
        $work = factory(Work::class)->make(['published' => 1]);

        $this->assertEquals('Yes', $work->isPublished());
    }
}

