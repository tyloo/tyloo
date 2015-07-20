<?php

namespace App\Tests\Http\Controllers\Frontend;

use App\Tests\AbstractTestCase;

class PagesControllerTest extends AbstractTestCase
{

    /** @test */
    public function it_has_an_home_page()
    {
        $this->visit('/');
    }

    /** @test */
    public function it_has_a_resume_page()
    {
        $this->visit('/resume');
    }
}
