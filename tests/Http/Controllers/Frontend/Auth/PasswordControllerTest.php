<?php

namespace App\Tests\Http\Controllers\Frontend\Auth;

use App\Tests\AbstractTestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PasswordControllerTest extends AbstractTestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_can_remind_password()
    {
        $this->visit('/auth/remind')
            ->type('test@test.com', 'email')
            ->press('Submit')
            ->seePageIs('/auth/remind');
    }
}
