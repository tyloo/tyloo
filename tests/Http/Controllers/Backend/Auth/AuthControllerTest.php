<?php

namespace App\Tests\Http\Controllers\Backend\Auth;

use App\Tests\AbstractTestCase;
use App\User;

class AuthControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_log_an_user_in()
    {
        $this->withoutMiddleware();

        $credentials = [
            'email' => 'jbonva@gmail.com',
            'password' => '123456',
        ];
        factory(User::class)->create($credentials);
        $this->post('/admin/auth/login', $credentials);
        $this->assertRedirectedTo('/admin');
    }

    /** @test */
    public function it_cannot_log_an_user_in_with_bad_credentials()
    {
        $this->withoutMiddleware();

        $credentials = [
            'email' => 'badguy@tyloo.fr',
            'password' => '123456',
        ];
        $this->post('/admin/auth/login', $credentials);
        $this->assertRedirectedTo('/admin/auth/login');
    }
}
