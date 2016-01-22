<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\Criteria\PostType;
use App\Repositories\PostsRepository;
use App\Tag;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class WorkController extends Controller
{
    /**
     * @var \App\Repositories\PostsRepository
     */
    private $repository;

    public function __construct(PostsRepository $repository)
    {
        $this->repository = $repository->criteria(new PostType('work'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $works = $this->repository->with('tags')->fetch(1, 30, ['*'], [], ['id' => 'DESC']);
        $tags = Tag::with([
            'posts' => function (BelongsToMany $query) {
                $query->where('type', 'work');
            },
        ])->get();

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
        $work = $this->repository->findBy('slug', $slug);
        $works = $this->repository->fetch(1, 30, ['*'], [], ['id' => 'DESC']);

        return view('frontend.pages.works.show', compact('work', 'works'));
    }
}
