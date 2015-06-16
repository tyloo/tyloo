<?php

namespace App\Tests\Integration;

use App\Tests\TestCase;

class IntegrationTest extends TestCase
{
    /** @test */
    public function test_prepared()
    {
        $this->assertEquals('App\Tests\Integration\IntegrationTest', get_class($this));
    }

    /** @test */
    public function test_home_page()
    {
        $this->visit('/');
    }

    /** @test */
    public function test_resume_page()
    {
        $this->visit('/resume');
    }

    /** @test */
    public function test_works_page()
    {
        $this->visit('/works');
    }

    /** @test */
    public function test_blog_page()
    {
        $this->visit('/blog');
    }

    /** @test */
    public function test_contact_page()
    {
        $this->visit('/contact');
    }

    /** @test */
    public function test_search_page()
    {
        $this->visit('/search');
    }
}
