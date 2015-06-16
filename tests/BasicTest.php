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
}