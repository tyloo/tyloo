<?php

namespace App\Tests\Http\Controllers\Frontend\Auth;

use App\Tests\AbstractTestCase;

class AuthControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_register_users()
    {
        $this->visit('/auth/register')
             ->type('Julien Bonvarlet', 'name')
             ->type('test@test.com', 'email')
             ->type('123456', 'password')
             ->type('123456', 'password_confirmation')
             ->press('Register')
             ->seePageIs('/admin');
        $this->seeInDatabase('users', ['email' => 'test@test.com']);
    }

    /** @test */
    public function it_cannot_register_users_with_bad_password_confirmation()
    {
        $this->visit('/auth/register')
             ->type('Julien Bonvarlet', 'name')
             ->type('test@test.com', 'email')
             ->type('123456', 'password')
             ->type('12345', 'password_confirmation')
             ->press('Register')
             ->seePageIs('/auth/register');
    }
}
