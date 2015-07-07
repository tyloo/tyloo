<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Post;
use App\Tests\AbstractTestCase;
use App\User;
use Mockery;

class BlogControllerTest extends AbstractTestCase
{
    public function setUp()
    {
        parent::setUp();

        $user = factory(User::class)->create();
        $this->be($user);
    }
    /** @test */
    public function it_can_fetch_blog_posts_list()
    {
        $this->visit('/admin/blog');
    }

    /** @test */
    public function it_can_create_a_blog_post()
    {
        $this->visit('/admin/blog/create');
    }

    /** @test */
    public function it_can_store_a_blog_post()
    {
        $this->withoutMiddleware();

        $data = [
            'title' => 'Blog Post',
            'slug' => 'blog-post',
            'excerpt' => 'Blog Post Excerpt',
            'content' => 'Blog Post Content',
            'published' => 1
        ];

        $this->post('/admin/blog', $data);
        $this->seeInDatabase('posts', $data);
        $this->assertRedirectedToRoute('admin.blog.index');
    }

    /** @test */
    public function it_has_a_page_showing_a_single_post()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create(['title' => 'Post Title', 'slug' => 'post-title', 'published' => 1, 'author_id' => $user->id]);
        $this->visit('/admin/blog/' . $post->id);
        $this->assertViewHas('post');
    }

    /** @test */
    public function it_can_edit_a_blog_post()
    {
        $post = factory(Post::class)->create();
        $this->visit('/admin/blog/' . $post->id . '/edit');
        $this->assertViewHas('post');
    }

    /** @test */
    public function it_can_update_a_blog_post()
    {
        $this->withoutMiddleware();

        $data = ['title' => 'New Title', 'content' => 'New Content'];
        $post = factory(Post::class)->create();

        $this->put('/admin/blog/' . $post->id, $data);
        $this->seeInDatabase('posts', $data);
        $this->assertRedirectedToRoute('admin.blog.index');
    }

    /** @test */
    public function it_can_delete_a_blog_post()
    {
        $this->withoutMiddleware();

        $data = [
            'title' => 'Blog Post',
            'slug' => 'blog-post',
            'excerpt' => 'Blog Post Excerpt',
            'content' => 'Blog Post Content',
            'published' => 1
        ];
        $post = factory(Post::class)->create();

        $this->get('/admin/blog/delete/' . $post->id);
        $this->notSeeInDatabase('posts', $data);
        $this->assertRedirectedToRoute('admin.blog.index');
    }
}
