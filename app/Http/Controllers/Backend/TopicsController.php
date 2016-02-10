<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TopicRequest;
use App\Repositories\TopicRepository;

class TopicsController extends Controller
{
    /**
     * @var \App\Repositories\TopicRepository
     */
    protected $topics;

    public function __construct(TopicRepository $topics)
    {
        $this->topics = $topics;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $topics = $this->topics->all();

        return view('backend.topics.index', compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('backend.topics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TopicRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TopicRequest $request)
    {
        $this->topics->create($request->all());

        return redirect()->route('admin.topics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $topic = $this->topics->find($id);

        return view('backend.topics.show', compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $topic = $this->topics->find($id);

        return view('backend.topics.edit', compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TopicRequest $request
     * @param int        $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(TopicRequest $request, $id)
    {
        $this->topics->update($request->all(), $id);

        return redirect()->route('admin.topics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->topics->delete($id);

        return redirect()->route('admin.topics.index');
    }
}
