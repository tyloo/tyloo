<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\Criterias\LastFive;
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
        $tags = $this->tags->has('works')->all();

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
        $works = $this->works->pushCriteria(new LastFive())->all();

        return view('frontend.pages.works.show', compact('work', 'works'));
    }
}
