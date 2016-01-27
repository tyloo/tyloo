<?php

namespace Tests;

use App\Tag;
use App\User;
use App\Work;
use Mockery;

class WorkTest extends AbstractTestCase
{
    /** @test */
    public function it_has_an_author()
    {
        $mock = Mockery::mock(Work::class)->makePartial();
        $mock->shouldReceive('belongsTo')
            ->once()
            ->with(User::class)
            ->andReturn('mocked');

        $this->assertEquals('mocked', $mock->author());
    }

    /** @test */
    public function it_has_tags()
    {
        $mock = Mockery::mock(Work::class)->makePartial();
        $mock->shouldReceive('belongsToMany')
            ->once()
            ->with(Tag::class, 'work_tag')
            ->andReturn('mocked');

        $this->assertEquals('mocked', $mock->tags());
    }
}
