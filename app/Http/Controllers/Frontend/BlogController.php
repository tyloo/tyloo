<?php

namespace App\Http\Controllers\Frontend;

use App\Post;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;

class BlogController extends Controller
{
    /**
     * @var \App\Repositories\PostRepository
     */
    protected $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('frontend.pages.blog.index')->withPosts($this->repository->allPaginated(10));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return Response
     */
    public function show($slug)
    {
        return Post::where('slug', $slug)->firstOrFail();
    }
}
