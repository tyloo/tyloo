<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;

class TagsControllerTest extends AbstractTestCase
{
    protected $user;

    public function setUp()
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
    }

    /** @test */
    public function it_can_fetch_tags_list()
    {
        $this->actingAs($this->user)
             ->visit('/admin/tags');
    }

    /** @test */
    public function it_can_create_a_tag()
    {
        $this->actingAs($this->user)
             ->visit('/admin/tags/create');
    }
}
