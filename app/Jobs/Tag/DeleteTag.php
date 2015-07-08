<?php

namespace App\Jobs\Tag;

use App\Jobs\Job;
use App\Repositories\TagRepository;
use Illuminate\Contracts\Bus\SelfHandling;

class DeleteTag extends Job implements SelfHandling
{
    /**
     * @var \App\Repositories\TagRepository
     */
    protected $tag;

    /**
     * @var null|string
     */
    protected $id;

    /**
     * Create a new job instance.
     *
     * @param \App\Repositories\TagRepository $tag
     * @param int                              $id
     */
    public function __construct(TagRepository $tag, $id = 0)
    {
        $this->tag = $tag;
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
        return $this->tag->delete($this->id);
    }
}
