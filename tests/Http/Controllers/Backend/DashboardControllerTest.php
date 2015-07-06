<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;

class DashboardControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_cannot_visit_dashboard_when_anonymous()
    {
        $this->visit('/admin')
             ->seePageIs('/auth/login');
    }

    /** @test */
    public function it_can_visit_dashboard_when_connected()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
             ->visit('/admin');
    }
}
