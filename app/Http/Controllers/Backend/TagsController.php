<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Jobs\Tag\DeleteTag;
use App\Jobs\Tag\SaveTag;
use App\Repositories\TagRepository;

class TagsController extends Controller
{
    /**
     * @var \App\Repositories\TagRepository
     */
    protected $tag;

    public function __construct(TagRepository $tag)
    {
        $this->tag = $tag;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $tags = $this->tag->all();

        return view('backend.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('backend.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TagRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TagRequest $request)
    {
        $this->dispatch(new SaveTag($this->tag, $request->except(['_token', '_method'])));

        return redirect()->route('admin.tags.index');
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
        $tag = $this->tag->find($id);

        return view('backend.tags.show', compact('tag'));
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
        $tag = $this->tag->find($id);

        return view('backend.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TagRequest $request
     * @param  int       $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(TagRequest $request, $id)
    {
        $this->dispatch(new SaveTag($this->tag, $request->except(['_token', '_method']), $id));

        return redirect()->route('admin.tags.index');
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
        $this->dispatch(new DeleteTag($this->tag, $id));

        return redirect()->route('admin.tags.index');
    }
}
