<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;

class WorksControllerTest extends AbstractTestCase
{
    /** @before */
    public function createAndBe()
    {
        parent::createAndBe();
    }

    /** @test */
    public function it_can_fetch_works_list()
    {
        $this->visit('/admin/works');
    }

    /** @test */
    public function it_can_create_a_work()
    {
        $this->visit('/admin/works/create');
    }
}
