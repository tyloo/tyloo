<?php

namespace App\Tests\Integration;

use App\Tests\AbstractTestCase;

class PagesControllerTest extends AbstractTestCase
{
    /**
     * @test
     */
    public function it_displays_home_page()
    {
        $this->visit('/')
             ->seePageIs('/');
    }

    /**
     * @test
     */
    public function it_displays_resume_page()
    {
        $this->visit('/resume')
             ->seePageIs('/resume');
    }

    /**
     * @test
     */
    public function it_displays_works_page()
    {
        $this->visit('/works')
            ->seePageIs('/works');
    }

    /**
     * @test
     */
    public function it_displays_contact_page()
    {
        $this->visit('/contact')
             ->seePageIs('/contact');
    }
}
