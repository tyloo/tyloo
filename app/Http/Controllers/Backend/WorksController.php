<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostWorkRequest;
use App\Jobs\Work\DeleteWork;
use App\Jobs\Work\SaveWork;
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
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $works = $this->work->all();

        return view('backend.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('backend.works.create');
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
        $this->dispatch(new SaveWork($this->work, $request->except(['_token', '_method'])));

        return redirect()->route('admin.works.index');
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
        $work = $this->work->find($id);

        return view('backend.works.show', compact('work'));
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
        $work = $this->work->find($id);

        return view('backend.works.edit', compact('work'));
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
        $this->dispatch(new SaveWork($this->work, $request->except(['_token', '_method']), $id));

        return redirect()->route('admin.works.index');
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
        $this->dispatch(new DeleteWork($this->work, $id));

        return redirect()->route('admin.works.index');
    }
}
