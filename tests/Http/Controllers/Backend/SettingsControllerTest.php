<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;

class SettingsControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_edit_settings()
    {
        $this->createAndBe();

        $this->visit('/admin/settings');
    }
}
