<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Jobs\DeletePost;
use App\Jobs\SavePost;
use App\Repositories\PostRepository;

class BlogController extends Controller
{
    /**
     * @var \App\Repositories\PostRepository
     */
    protected $post;

    public function __construct(PostRepository $post)
    {
        $this->post = $post;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = $this->post->all();

        return view('backend.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $request
     *
     * @return string
     */
    public function store(PostRequest $request)
    {
        $this->dispatch(new SavePost($request, $this->post));

        return redirect()->route('admin.blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = $this->post->find($id);

        return view('backend.blog.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->post->find($id);

        return view('backend.blog.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $request
     * @param  int                           $id
     *
     * @return Response
     */
    public function update(PostRequest $request, $id)
    {
        $this->dispatch(new SavePost($request, $this->post, $id));

        return redirect()->route('admin.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->dispatch(new DeletePost($this->post, $id));

        return redirect()->route('admin.blog.index');
    }
}
