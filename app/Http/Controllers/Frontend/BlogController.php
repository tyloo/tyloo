<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use App\Repositories\TagRepository;
use App\Tag;

class BlogController extends Controller
{
    /**
     * @var \App\Repositories\PostRepository
     */
    protected $posts;

    /**
     * @var \App\Repositories\TagRepository
     */
    protected $tags;

    public function __construct(PostRepository $posts, TagRepository $tags) {
        $this->posts = $posts;
        $this->tags = $tags;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = $this->posts->with('author')->paginate(5);

        return view('frontend.pages.blog.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param string $slug
     *
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $post = $this->posts->findByField('slug', $slug)->first();

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
        $tag = $this->tags->findByField('slug', $slug)->first();
        $posts = $tag->posts()->paginate(5);

        return view('frontend.pages.blog.tag', compact('tag', 'posts'));
    }
}
