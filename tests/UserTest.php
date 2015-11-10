<?php

namespace App\Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Hash;
use Mockery;

class UserTest extends AbstractTestCase
{
    use DatabaseMigrations;

    public function tearDown()
    {
        Mockery::close();
    }

    /** @test */
    public function it_has_posts()
    {
        $mock = Mockery::mock('App\User')->makePartial();
        $mock->shouldReceive('hasMany')
            ->once()
            ->with('App\Post')
            ->andReturn('mocked');

        $this->assertEquals('mocked', $mock->posts());
    }

    /** @test */
    public function it_hashes_password()
    {
        $user = factory('App\User')->make(['password' => 'test']);

        $this->assertTrue(Hash::check('test', $user->password));
    }
}
