<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;

class TagsControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_fetch_tags_list()
    {
        $this->createAndBe();

        $this->visit('/admin/tags');
    }

    /** @test */
    public function it_can_create_a_tag()
    {
        $this->createAndBe();

        $this->visit('/admin/tags/create');
    }
}
