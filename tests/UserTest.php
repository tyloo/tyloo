<?php

namespace App\Tests;

use Illuminate\Support\Facades\Hash;
use Mockery;

class UserTest extends AbstractTestCase
{
    public function tearDown()
    {
        Mockery::close();
    }

    /** @test */
    public function it_has_posts()
    {
        $mock = Mockery::mock('App\User')->makePartial();
        $mock->shouldReceive('hasMany')
            ->atLeast()
            ->once()
            ->with('App\Post')
            ->andReturn('mocked');

        $this->assertEquals('mocked', $mock->posts());
    }

    /** @test */
    public function it_hashes_password()
    {
        $user = factory('App\User')->create(['password' => 'test']);

        $this->assertTrue(Hash::check('test', $user->password));
    }
}

