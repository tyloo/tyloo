<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\PostsRepository;

class WorkController extends Controller
{
    /**
     * @var \App\Repositories\PostsRepository
     */
    protected $repository;

    public function __construct(PostsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $works = $this->repository->all();

        return view('frontend.pages.works.index', compact('works'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     *
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $work = $this->repository->findBy('slug', $slug);

        return view('frontend.pages.works.show', compact('work'));
    }
}
