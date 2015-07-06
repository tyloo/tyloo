<?php

namespace App\Tests\Http\Controllers\Frontend\Auth;

use App\Tests\AbstractTestCase;

class PasswordControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_remind_password()
    {
        $this->visit('/auth/remind')
            ->type('test@test.com', 'email')
            ->press('Submit')
            ->seePageIs('/auth/remind');
    }
}
