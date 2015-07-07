<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;

class SettingsControllerTest extends AbstractTestCase
{
    protected $user;

    public function setUp()
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
    }

    /** @test */
    public function it_can_edit_settings()
    {
        $this->actingAs($this->user)
             ->visit('/admin/settings');
    }
}
