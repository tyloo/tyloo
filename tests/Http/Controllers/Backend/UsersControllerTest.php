<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;

class UsersControllerTest extends AbstractTestCase
{
    /** @before */
    public function createAndBe()
    {
        parent::createAndBe();
    }

    /** @test */
    public function it_can_fetch_users_list()
    {
        $this->visit('/admin/users');
    }

    /** @test */
    public function it_can_create_an_user()
    {
        $this->visit('/admin/users/create');
    }
}
