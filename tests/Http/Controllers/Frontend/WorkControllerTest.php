<?php

namespace App\Tests\Http\Controllers\Frontend;

use App\Tests\AbstractTestCase;
use App\Work;

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
        $work = factory(Work::class)->create();
        $this->call('GET', '/works/' . $work->slug);
        $this->assertViewHas('work');
    }
}
