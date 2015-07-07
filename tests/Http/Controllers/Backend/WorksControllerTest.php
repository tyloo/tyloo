<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;

class WorksControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_fetch_works_list()
    {
        $this->createAndBe();

        $this->visit('/admin/works');
    }

    /** @test */
    public function it_can_create_a_work()
    {
        $this->createAndBe();

        $this->visit('/admin/works/create');
    }
}
