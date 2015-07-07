<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;

class SettingsControllerTest extends AbstractTestCase
{
    /** @before */
    public function createAndBe()
    {
        parent::createAndBe();
    }

    /** @test */
    public function it_can_edit_settings()
    {
        $this->visit('/admin/settings');
    }
}
