<?php

namespace App\Tests\Http\Controllers\Backend;

use App\User;
use App\Work;
use Tests\AbstractTestCase;

class WorksControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_upload_an_image_for_work()
    {
        $this->createAndBe();
        $absolutePathToFile = public_path('assets/img/logo.png');
        $uploadPath = '/uploads/works/work-title.png';

        $this->visit('/admin/works/create')
            ->type('Work Title', 'title')
            ->type('work-title', 'slug')
            ->type('Work Content', 'content')
            ->attach($absolutePathToFile, 'image')
            ->press('Submit');
        $this->seeInDatabase('works', ['image' => $uploadPath]);
        unlink(public_path($uploadPath));
    }

    /** @test */
    public function it_can_fetch_works_list()
    {
        $this->createAndBe();

        $this->visit('/admin/works');
    }

    /** @test */
    public function it_can_create_a_work()
    {
        $this->createAndBe();

        $this->visit('/admin/works/create');
    }

    /** @test */
    public function it_can_store_a_work()
    {
        $this->createAndBe();

        $data = [
            'title'     => 'Work Title',
            'slug'      => 'work-title',
            'excerpt'   => 'Work Excerpt',
            'content'   => 'Work Content',
            'tags'      => 'tag1,tag2'
        ];

        $this->post('/admin/works', $data);
        $this->seeInDatabase('works', ['title' => $data['title'], 'slug' => $data['slug']]);
        $this->assertRedirectedToRoute('admin.works.index');
    }

    /** @test */
    public function it_has_a_page_showing_a_single_work()
    {
        $user = $this->createAndBe();

        $work = factory(Work::class)->create([
            'title'     => 'Work Title',
            'slug'      => 'work-title',
            'author_id' => $user->id,
        ]);
        $this->visit('/admin/works/'.$work->id);
        $this->assertViewHas('work');
    }

    /** @test */
    public function it_can_edit_a_work()
    {
        $user = $this->createAndBe();

        $work = factory(Work::class)->create(['author_id' => $user->id]);
        $this->visit('/admin/works/'.$work->id.'/edit');
        $this->assertViewHas('work');
    }

    /** @test */
    public function it_can_update_a_work()
    {
        $user = $this->createAndBe();

        $data = ['title' => 'New Title', 'content' => 'New Content', 'tags' => 'tag1,tag2,tag3'];
        $work = factory(Work::class)->create(['author_id' => $user->id]);

        $this->put('/admin/works/'.$work->id, $data);
        $this->seeInDatabase('works', ['title' => $data['title']]);
        $this->assertRedirectedToRoute('admin.works.index');
    }

    /** @test */
    public function it_can_delete_a_work()
    {
        $user = $this->createAndBe();

        $data = [
            'title'     => 'Work Title',
            'slug'      => 'work-title',
            'excerpt'   => 'Work Excerpt',
            'content'   => 'Work Content',
            'author_id' => $user->id
        ];
        $work = factory(Work::class)->create($data);

        $this->get('/admin/works/delete/'.$work->id);
        $this->notSeeInDatabase('works', $data);
        $this->assertRedirectedToRoute('admin.works.index');
    }
}
