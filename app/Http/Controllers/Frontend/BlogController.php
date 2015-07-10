<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\PostsRepository;
use App\Repositories\TagsRepository;

class BlogController extends Controller
{
    /**
     * @var PostsRepository
     */
    protected $post;

    /**
     * @var TagsRepository
     */
    protected $tag;

    /**
     * Blog Constructor.
     *
     * @param \App\Repositories\PostsRepository $post
     * @param \App\Repositories\TagsRepository  $tag
     */
    public function __construct(PostsRepository $post, TagsRepository $tag)
    {
        $this->post = $post;
        $this->tag = $tag;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = $this->post->paginate(5);

        return view('frontend.pages.blog.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     *
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $post = $this->post->findBy('slug', $slug);

        return view('frontend.pages.blog.show', compact('post'));
    }

    /**
     * Display a listing of the resource based on a tag.
     *
     * @param $slug
     *
     * @return \Illuminate\View\View
     */
    public function tag($slug)
    {
        $tag = $this->tag->findBy('slug', $slug);
        $posts = $tag->posts()->paginate(10);

        return view('frontend.pages.blog.tag', compact('tag', 'posts'));
    }
}
