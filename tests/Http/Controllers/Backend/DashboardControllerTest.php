<?php

namespace Tests\Http\Controllers\Backend;

use App\User;
use Tests\AbstractTestCase;

class DashboardControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_cannot_visit_dashboard_when_anonymous()
    {
        $this->visit('/admin')
             ->seePageIs('/admin/auth/login');
    }

    /** @test */
    public function it_can_visit_dashboard_when_connected()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
             ->visit('/admin');
    }
}
