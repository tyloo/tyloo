<?php

namespace App\Tests\Http\Controllers\Frontend;

use App\Post;
use App\Tests\AbstractTestCase;

class WorkControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_loads_works_on_index_page()
    {
        $this->visit('/works');
        $this->assertViewHas('works');
    }

    /** @test */
    public function it_can_fetch_a_single_work_page()
    {
        $work = factory(Post::class)->create(['type' => 'work']);
        $this->call('GET', '/works/' . $work->slug);
        $this->assertViewHas('work');
    }
}
