<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\Criteria\Post\Published;
use App\Repositories\PostRepository as Post;

class BlogController extends Controller
{
    /**
     * @var \App\Http\Controllers\Frontend\Post
     */
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
        $this->post->pushCriteria(new Published());
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('frontend.pages.blog.index')->withPosts($this->post->paginate(10));
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     *
     * @return Response
     */
    public function show($slug)
    {
        return $this->post->findBy('slug', $slug);
    }
}
