<?php

namespace App\Tests\Integration;

use App\Tests\AbstractTestCase;

class BasicTest extends AbstractTestCase
{
    /**
     * @test
     */
    public function it_handles_404_page()
    {
        $this->call('GET', '/this-is-sparta');
        $this->assertResponseStatus(404);
    }
}
