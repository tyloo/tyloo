<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostWorkRequest;
use App\Jobs\SavePost;
use App\Repositories\PostsRepository;

class PostsController extends Controller
{
    /**
     * @var \App\Repositories\PostsRepository
     */
    private $repository;

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
        $posts = $this->repository->all();

        return view('backend.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostWorkRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostWorkRequest $request)
    {
        $this->dispatch(new SavePost($this->repository, $request->all()));

        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $post = $this->repository->find($id);

        return view('backend.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $post = $this->repository->find($id);

        return view('backend.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostWorkRequest $request
     * @param  int            $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostWorkRequest $request, $id)
    {
        $this->dispatch(new SavePost($this->repository, $request->except(['_token', '_method']), $id));

        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->repository->delete($id);

        return redirect()->route('admin.posts.index');
    }
}
