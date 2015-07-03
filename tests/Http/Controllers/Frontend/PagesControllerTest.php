<?php

namespace App\Tests\Http\Controllers\Frontend;

use App\Tests\AbstractTestCase;

class PagesControllerTest extends AbstractTestCase
{

    /** @test */
    public function it_has_an_home_page()
    {
        $this->visit('/')
             ->seePageIs('/');
    }

    /** @test */
    public function it_has_a_resume_page()
    {
        $this->visit('/resume')
             ->seePageIs('/resume');
    }

    /** @test */
    public function it_has_a_contact_page()
    {
        $this->visit('/contact')
             ->seePageIs('/contact');
    }

    /** @test */
    public function it_can_send_contact_form()
    {
        $this->withoutMiddleware();
        $data = [
            'contactName' => 'Julien Bonvarlet',
            'contactEmail' => 'jbonva@gmail.com',
            'contactMessage' => 'Test Message'
        ];
        $this->post('/contact', $data);
    }
}
