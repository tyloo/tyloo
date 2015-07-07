<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;

class SettingsControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_edit_settings()
    {
        $user = factory(User::class)->make();
        $this->actingAs($user)
             ->visit('/admin/settings');
    }
}
