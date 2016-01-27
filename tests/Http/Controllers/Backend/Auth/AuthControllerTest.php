<?php

namespace App\Tests\Http\Controllers\Backend\Auth;

use App\User;
use Tests\AbstractTestCase;

class AuthControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_log_an_user_in()
    {
        $credentials = [
            'email'    => 'jbonva@gmail.com',
            'password' => '123456',
        ];
        factory(User::class)->create($credentials);

        $this->visit('/admin/auth/login')
            ->type($credentials['email'], 'email')
            ->type($credentials['password'], 'password')
            ->press('Sign In')
            ->seePageIs('/admin');
    }

    /** @test */
    public function it_cannot_log_an_user_in_with_bad_credentials()
    {
        $credentials = [
            'email'    => 'badguy@tyloo.fr',
            'password' => '123456',
        ];

        $this->visit('/admin/auth/login')
            ->type($credentials['email'], 'email')
            ->type($credentials['password'], 'password')
            ->press('Sign In')
            ->seePageIs('/admin/auth/login');
    }
}
