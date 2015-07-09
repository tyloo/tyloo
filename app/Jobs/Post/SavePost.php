<?php

namespace App\Jobs\Post;

use App\Http\Requests\PostRequest;
use App\Jobs\Job;
use App\Repositories\PostRepository;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class SavePost extends Job implements SelfHandling
{
    /**
     * @var \App\Http\Requests\PostRequest
     */
    protected $request;

    /**
     * @var \App\Repositories\PostRepository
     */
    protected $post;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var null|string
     */
    protected $id;

    /**
     * Create a new job instance.
     *
     * @param \App\Http\Requests\PostRequest   $request
     * @param \App\Repositories\PostRepository $post
     * @param string                           $id
     */
    public function __construct(PostRequest $request, PostRepository $post, $id = null)
    {
        $this->request = $request;
        $this->data = $request->except(['_token', '_method']);
        $this->post = $post;
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // We build the image
        $this->data['image'] = $this->buildImage($this->request->file('image'));

        // New Post
        if ($this->id === null) {
            // We assign the author of the post
            $this->assignAuthor();

            return $this->post->create($this->data);
        }

        // Update Post
        return $this->post->update($this->data, $this->id);
    }

    /**
     * Assign the Author of the Post.
     */
    private function assignAuthor()
    {
        $this->data['author_id'] = Auth::user()->id;
    }

    /**
     * Build the Post Image.
     *
     * @param $file
     *
     * @return null|string
     */
    public function buildImage($file)
    {
        if ($file != null) {
            $filePath = '/uploads/blog/' . $this->data['slug'] . '.' . $file->getClientOriginalExtension();
            if (Image::make($file)->save(public_path($filePath))) {
                return $filePath;
            }
        }
        else {
            return null;
        }
    }
}
