<?php

namespace App\Tests;

class BasicTest extends TestCase
{
    /**
     * A basic functional Home Page test.
     *
     * @return void
     */
    public function testHomePage()
    {
        $this->visit('/')
             ->see('Julien \'Tyloo\' Bonvarlet');
    }

    /**
     * Test Menu Anchors : /resume
     *
     * @return void
     */
    public function testResumeAnchor()
    {
        $this->visit('/')
             ->click('Resume')
             ->seePageIs('/resume');
    }

    /**
     * Test Menu Anchors : /works
     *
     * @return void
     */
    public function testWorksAnchor()
    {
        $this->visit('/')
            ->click('Works')
            ->seePageIs('/works');
    }

    /**
     * Test Menu Anchors : /blog
     *
     * @return void
     */
    public function testBlogAnchor()
    {
        $this->visit('/')
            ->click('Blog')
            ->seePageIs('/blog');
    }

    /**
     * Test Menu Anchors : contact
     *
     * @return void
     */
    public function testContactAnchor()
    {
        $this->visit('/')
            ->click('Contact')
            ->seePageIs('/contact');
    }
}