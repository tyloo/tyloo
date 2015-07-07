<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;

class WorksControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_fetch_works_list()
    {
        $user = factory(User::class)->make();
        $this->actingAs($user)
             ->visit('/admin/works');
    }

    /** @test */
    public function it_can_create_a_work()
    {
        $user = factory(User::class)->make();
        $this->actingAs($user)
             ->visit('/admin/works/create');
    }
}
