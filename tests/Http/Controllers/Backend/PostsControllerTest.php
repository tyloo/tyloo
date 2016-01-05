<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Post;
use App\Tests\AbstractTestCase;
use App\User;

class PostsControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_upload_an_image()
    {
        $this->createAndBe();
        $absolutePathToFile = public_path('assets/img/logo.png');
        $uploadPath = '/uploads/post-title.png';

        $this->visit('/admin/posts/create')
            ->type('Post Title', 'title')
            ->type('post-title', 'slug')
            ->type('Post Content', 'content')
            ->attach($absolutePathToFile, 'image')
            ->press('Submit');
        $this->seeInDatabase('posts', ['image' => $uploadPath]);
        unlink(public_path($uploadPath));
    }

    /** @test */
    public function it_can_fetch_posts_list()
    {
        $this->createAndBe();

        $this->visit('/admin/posts');
    }

    /** @test */
    public function it_can_create_a_post()
    {
        $this->createAndBe();

        $this->visit('/admin/posts/create');
    }

    /** @test */
    public function it_can_store_a_post()
    {
        $this->createAndBe();

        $data = [
            'title'     => 'Post Title',
            'slug'      => 'post-title',
            'excerpt'   => 'Post Excerpt',
            'content'   => 'Post Content',
        ];

        $this->post('/admin/posts', $data);
        $this->seeInDatabase('posts', ['title' => $data['title'], 'slug' => $data['slug']]);
        $this->assertRedirectedToRoute('admin.posts.index');
    }

    /** @test */
    public function it_has_a_page_showing_a_single_post()
    {
        $this->createAndBe();

        $user = factory(User::class)->create();
        $post = factory(Post::class)->create([
            'title'     => 'Post Title',
            'slug'      => 'post-title',
            'author_id' => $user->id,
        ]);
        $this->visit('/admin/posts/'.$post->id);
        $this->assertViewHas('post');
    }

    /** @test */
    public function it_can_edit_a_post()
    {
        $this->createAndBe();

        $post = factory(Post::class)->create();
        $this->visit('/admin/posts/'.$post->id.'/edit');
        $this->assertViewHas('post');
    }

    /** @test */
    public function it_can_update_a_post()
    {
        $this->createAndBe();

        $data = ['title' => 'New Title', 'content' => 'New Content'];
        $post = factory(Post::class)->create();

        $this->put('/admin/posts/'.$post->id, $data);
        $this->seeInDatabase('posts', ['title' => $data['title']]);
        $this->assertRedirectedToRoute('admin.posts.index');
    }

    /** @test */
    public function it_can_delete_a_post()
    {
        $this->createAndBe();

        $data = [
            'title'     => 'Post Title',
            'slug'      => 'post-title',
            'excerpt'   => 'Post Excerpt',
            'content'   => 'Post Content',
        ];
        $post = factory(Post::class)->create($data);

        $this->get('/admin/posts/delete/'.$post->id);
        $this->notSeeInDatabase('posts', $data);
        $this->assertRedirectedToRoute('admin.posts.index');
    }
}
