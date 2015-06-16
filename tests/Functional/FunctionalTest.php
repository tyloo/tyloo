<?php

namespace App\Tests\Functional;

use App\Tests\TestCase;

class FunctionalTest extends TestCase
{
    /** @test */
    public function test_prepared()
    {
        $this->assertEquals('App\Tests\Functional\FunctionalTest', get_class($this));
    }
}
