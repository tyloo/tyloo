<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;

class UsersControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_fetch_users_list()
    {
        $user = factory(User::class)->make();
        $this->actingAs($user)
             ->visit('/admin/users');
    }

    /** @test */
    public function it_can_create_an_user()
    {
        $user = factory(User::class)->make();
        $this->actingAs($user)
             ->visit('/admin/users/create');
    }
}
