<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::all();

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
     * @param PostRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostRequest $request)
    {
        $this->savePost($request->all());

        return redirect()->route('admin.posts.index');
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
        $post = Post::findOrFail($id);

        return view('backend.posts.show', compact('post'));
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
        $post = Post::findOrFail($id);

        return view('backend.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $request
     * @param int         $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostRequest $request, $id)
    {
        $this->savePost($request->all(), $id);

        return redirect()->route('admin.posts.index');
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
        $post = Post::findOrFail($id);
        $post->delete($id);

        return redirect()->route('admin.posts.index');
    }

    /**
     * @param array    $data
     * @param int|null $id
     */
    protected function savePost(array $data = [], $id = null)
    {
        // Image Handling
        if (isset($data['image'])) {
            $data['image'] = $this->buildImage($data['slug'], $data['image']);
        }

        // We create the Post
        if ($id === null) {
            $data['author_id'] = Auth::id();
            Post::create($data);
        } else {
            Post::findOrFail($id)->update($data);
        }
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
        $filePath = '/uploads/'.$slug.'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(public_path($filePath));

        return $filePath;
    }
}
