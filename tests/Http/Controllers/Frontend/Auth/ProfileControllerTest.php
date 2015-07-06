<?php

namespace App\Tests\Http\Controllers\Frontend\Auth;

use App\Tests\AbstractTestCase;
use App\User;

class ProfileControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_visit_profile_page()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
             ->visit('/auth/profile')
             ->see('Welcome');
    }
}
