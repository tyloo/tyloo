<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\Criteria\Post\Published;
use App\Repositories\Criteria\Post\WithAuthor;
use App\Repositories\WorkRepository;

class WorkController extends Controller
{
    /**
     * @var \App\Repositories\WorkRepository
     */
    protected $work;

    public function __construct(WorkRepository $work)
    {
        $this->work = $work;
        $this->work->pushCriteria(new Published())->pushCriteria(new WithAuthor());
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $works = $this->work->all();

        return view('frontend.pages.works.index', compact('works'));
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
        $work = $this->work->findBy('slug', $slug);

        return view('frontend.pages.works.show', compact('work'));
    }
}
