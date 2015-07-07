<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;

class UsersControllerTest extends AbstractTestCase
{
    protected $user;

    public function setUp()
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
    }

    /** @test */
    public function it_can_fetch_users_list()
    {
        $this->actingAs($this->user)
             ->visit('/admin/users');
    }

    /** @test */
    public function it_can_create_an_user()
    {
        $this->actingAs($this->user)
             ->visit('/admin/users/create');
    }
}
