<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use App\Repositories\TagRepository;
use App\Repositories\TopicRepository;

class BlogController extends Controller
{
    /**
     * @var \App\Repositories\PostRepository
     */
    protected $posts;

    /**
     * @var \App\Repositories\TopicRepository
     */
    protected $topics;

    public function __construct(PostRepository $posts, TopicRepository $topics)
    {
        $this->posts = $posts;
        $this->topics = $topics;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = $this->posts->with('author')->paginate(5);
        $topics = $this->topics->all();

        return view('frontend.pages.blog.index', compact('posts', 'topics'));
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
    public function topic($slug)
    {
        $topic = $this->topics->findByField('slug', $slug)->first();
        $posts = $topic->posts()->paginate(5);
        $topics = $this->topics->all();

        return view('frontend.pages.blog.topic', compact('topic', 'posts', 'topics'));
    }
}
