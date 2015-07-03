<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DashboardControllerTest extends AbstractTestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_cannot_visit_dashboard_when_anonymous()
    {
        $this->visit('/admin')
             ->seePageIs('/auth/login');
    }

    /** @test */
    public function it_can_visit_dashboard_when_connected()
    {
        $user = User::first();
        $this->actingAs($user)
             ->visit('/admin')
             ->seePageIs('/admin');
    }
}
