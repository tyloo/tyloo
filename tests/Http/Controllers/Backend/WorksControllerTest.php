<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;

class WorksControllerTest extends AbstractTestCase
{
    protected $user;

    public function setUp()
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
    }

    /** @test */
    public function it_can_fetch_works_list()
    {
        $this->actingAs($this->user)
            ->visit('/admin/works');
    }

    /** @test */
    public function it_can_create_a_work()
    {
        $this->actingAs($this->user)
            ->visit('/admin/works/create');
    }
}
