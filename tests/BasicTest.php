<?php

namespace App\Tests;

class BasicTest extends TestCase
{
    /**
     * A basic functional Home Page test.
     */
    public function testHomePage()
    {
        $this->visit('/')
             ->see('Julien \'Tyloo\' Bonvarlet');
    }

    /**
     * Test Menu Anchors : /resume
     */
    public function testResumeAnchor()
    {
        $this->visit('/')
             ->click('Resume')
             ->seePageIs('/resume');
    }

    /**
     * Test Menu Anchors : /works
     */
    public function testWorksAnchor()
    {
        $this->visit('/')
             ->click('Works')
             ->seePageIs('/works');
    }

    /**
     * Test Menu Anchors : /blog
     */
    public function testBlogAnchor()
    {
        $this->visit('/')
             ->click('Blog')
             ->seePageIs('/blog');
    }

    /**
     * Test Menu Anchors : contact
     */
    public function testContactAnchor()
    {
        $this->visit('/')
             ->click('Contact')
             ->seePageIs('/contact');
    }
}
