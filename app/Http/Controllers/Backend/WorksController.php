<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkRequest;
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
     * @return Response
     */
    public function index()
    {
        $works = $this->work->all();

        return view('backend.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param WorkRequest $request
     *
     * @return string
     */
    public function store(WorkRequest $request)
    {
        $this->dispatch(new SaveWork($request->except(['_token', '_method']), $this->work));

        return redirect()->route('admin.works.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $work = $this->work->find($id);

        return view('backend.works.show', compact('work'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $work = $this->work->find($id);

        return view('backend.works.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param WorkRequest $request
     * @param  int                           $id
     *
     * @return Response
     */
    public function update(WorkRequest $request, $id)
    {
        $this->dispatch(new SaveWork($request->except(['_token', '_method']), $this->work, $id));

        return redirect()->route('admin.works.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->dispatch(new DeleteWork($this->work, $id));

        return redirect()->route('admin.works.index');
    }
}
