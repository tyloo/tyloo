<?php

namespace App\Tests\Http\Controllers\Backend\Auth;

use Tests\AbstractTestCase;

class PasswordControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_remind_password()
    {
        $this->visit('/admin/auth/remind')
            ->type('test@test.com', 'email')
            ->press('Submit')
            ->seePageIs('/admin/auth/remind');
    }
}
