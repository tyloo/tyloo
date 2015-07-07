<?php

namespace App\Jobs\Post;

use App\Jobs\Job;
use App\Repositories\PostRepository;
use Illuminate\Contracts\Bus\SelfHandling;

class DeletePost extends Job implements SelfHandling
{
    /**
     * @var \App\Repositories\PostRepository
     */
    protected $post;

    /**
     * @var null|string
     */
    protected $id;

    /**
     * Create a new job instance.
     *
     * @param \App\Repositories\PostRepository $post
     * @param int                              $id
     */
    public function __construct(PostRepository $post, $id = 0)
    {
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
        // Delete Post
        return $this->post->delete($this->id);
    }
}
