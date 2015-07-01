<?php

namespace App\Tests\Http\Controllers\Frontend\Auth;

use App\Tests\AbstractTestCase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProfileControllerTest extends AbstractTestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /** @test */
    public function it_can_visit_profile_page()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->visit('/auth/profile')
            ->seePageIs('/auth/profile')
            ->see('Welcome');
    }
}
