<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\TagRepository;
use App\Repositories\WorkRepository;

class WorkController extends Controller
{
    /**
     * @var \App\Repositories\WorkRepository
     */
    protected $works;

    /**
     * @var \App\Repositories\TagRepository
     */
    protected $tags;

    public function __construct(WorkRepository $works, TagRepository $tags)
    {
        $this->works = $works;
        $this->tags = $tags;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $works = $this->works->with('tags')->all();
        $tags = $this->tags->all();

        return view('frontend.pages.works.index', compact('works', 'tags'));
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
        $work = $this->works->findByField('slug', $slug)->first();
        $works = $this->works->all();

        return view('frontend.pages.works.show', compact('work', 'works'));
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
        $works = $tag->works()->paginate(5);

        return view('frontend.pages.works.tag', compact('tag', 'works'));
    }
}
