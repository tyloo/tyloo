<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\Criteria\Post\Published;
use App\Repositories\Criteria\Post\WithAuthor;
use App\Repositories\Criteria\Post\WithTags;
use App\Repositories\PostRepository;

class BlogController extends Controller
{
    /**
     * @var \App\Repositories\PostRepository
     */
    protected $post;

    public function __construct(PostRepository $post)
    {
        $this->post = $post;
        $this->post->pushCriteria(new Published())->pushCriteria(new WithAuthor())->pushCriteria(new WithTags());
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
        return view('frontend.pages.blog.show')->withPost($this->post->findBy('slug', $slug));
    }
}
