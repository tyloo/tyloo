<?php

namespace App\Tests\Http\Controllers\Backend\Auth;

use App\User;
use Tests\AbstractTestCase;

class ProfileControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_visit_profile_page()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
             ->visit('/admin/profile')
             ->see('Welcome');
    }
}
