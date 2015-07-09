<?php

namespace App\Jobs\Post;

use App\Jobs\Job;
use App\Repositories\PostRepository;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class SavePost extends Job implements SelfHandling
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @var \App\Repositories\PostRepository
     */
    protected $post;

    /**
     * @var integer|null
     */
    protected $id;

    /**
     * Create a new job instance.
     *
     * @param array                            $data
     * @param \App\Repositories\PostRepository $post
     * @param integer|null                     $id
     */
    public function __construct(array $data = [], PostRepository $post, $id = null)
    {
        $this->data = $data;
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
        $this->data['image'] = isset($this->data['image']) ? $this->buildImage($this->data['image']) : null;

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
     * @return string
     */
    public function buildImage($file)
    {
        $filePath = '/uploads/blog/' . $this->data['slug'] . '.' . $file->getClientOriginalExtension();
        Image::make($file)->save(public_path($filePath));

        return $filePath;
    }
}
