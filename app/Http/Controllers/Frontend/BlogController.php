<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->post->all();
        //return view('frontend.pages.blog.index')->withPosts($this->repository->allPaginated(10));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return Response
     */
    public function show($slug)
    {
        return $this->post->findBy('slug', $slug);
        //return Post::where('slug', $slug)->firstOrFail();
    }
}
