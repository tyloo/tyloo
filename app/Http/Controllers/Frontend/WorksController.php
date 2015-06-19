<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\Criteria\Post\Published;
use App\Repositories\Criteria\Post\WithAuthor;
use App\Repositories\WorkRepository;

class WorksController extends Controller
{
    /**
     * @var \App\Repositories\WorkRepository
     */
    protected $work;

    public function __construct(WorkRepository $work)
    {
        $this->work = $work;
        $this->work->pushCriteria(new Published());
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('frontend.pages.works.index')->withWorks($this->work->all());
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
        $this->work->pushCriteria(new WithAuthor());
        return view('frontend.pages.works.show')->withWork($this->work->findBy('slug', $slug));
    }
}
