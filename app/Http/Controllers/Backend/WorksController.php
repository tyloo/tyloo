<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkRequest;
use App\Repositories\TagRepository;
use App\Repositories\WorkRepository;
use App\Tag;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class WorksController extends Controller
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
        $works = $this->works->all();

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
     * @param WorkRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(WorkRequest $request)
    {
        $this->saveWork($request->all());

        return redirect()->route('admin.works.index');
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
        $work = $this->works->find($id);

        return view('backend.works.show', compact('work'));
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
        $work = $this->works->find($id);

        return view('backend.works.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param WorkRequest $request
     * @param int         $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(WorkRequest $request, $id)
    {
        $this->saveWork($request->all(), $id);

        return redirect()->route('admin.works.index');
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
        $this->works->delete($id);

        return redirect()->route('admin.works.index');
    }

    /**
     * We create or update the Work.
     *
     * @param array    $data
     * @param int|null $id
     *
     * @return Work
     */
    protected function saveWork(array $data = [], $id = null)
    {
        // Image Handling
        if (isset($data['image'])) {
            $data['image'] = $this->buildImage($data['slug'], $data['image']);
        }

        // We create the Work
        if ($id === null) {
            $data['author_id'] = Auth::id();

            $work = $this->works->create($data);
        } else {
            $work = $this->works->update($data, $id);
        }

        $this->saveTags($data, $work);
    }

    /**
     * Build the image.
     *
     * @param string       $slug
     * @param UploadedFile $image
     *
     * @return string
     */
    protected function buildImage($slug, $image)
    {
        $filePath = '/uploads/works/'.$slug.'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(public_path($filePath));

        return $filePath;
    }

    /**
     * Save the tags for the Post.
     *
     * @param array $data
     * @param       $post
     */
    protected function saveTags(array $data, $post)
    {
        $tags = explode(',', $data['tags']);
        foreach ($tags as $tag) {
            Tag::firstOrCreate(['name' => $tag, 'slug' => str_slug($tag)]);
        }
        $post->tags()->sync($this->tags->findWhereIn('name', $tags)->pluck('id')->toArray());
    }
}
