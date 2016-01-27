<?php

namespace App\Tests\Http\Controllers\Frontend;

use App\Tag;
use App\Work;
use Tests\AbstractTestCase;

class WorkControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_loads_works_on_index_page()
    {
        factory(Work::class, 10)->create();
        $this->visit('/works');
        $this->assertViewHas('works');
    }

    /** @test */
    public function it_can_fetch_a_single_work_page()
    {
        $work = factory(Work::class)->create();
        $this->call('GET', '/works/'.$work->slug);
        $this->assertViewHas('work');
    }

    /** @test */
    public function it_has_a_page_listing_works_from_a_tag()
    {
        $tag = factory(Tag::class)->create();
        $this->visit('/works/tag/'.$tag->slug);
        $this->assertViewHas('works');
    }
}
