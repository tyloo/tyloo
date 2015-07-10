<?php

namespace App\Jobs\Tag;

use App\Jobs\Job;
use App\Repositories\TagRepository;
use Illuminate\Contracts\Bus\SelfHandling;

class SaveTag extends Job implements SelfHandling
{
    /**
     * @var \App\Repositories\TagRepository
     */
    protected $tag;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var integer|null
     */
    protected $id;

    /**
     * Create a new job instance.
     *
     * @param \App\Repositories\TagRepository $tag
     * @param array                           $data
     * @param integer|null                    $id
     */
    public function __construct(TagRepository $tag, array $data = [], $id = null)
    {
        $this->tag = $tag;
        $this->data = $data;
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // New Tag
        if ($this->id === null) {
            return $this->tag->create($this->data);
        }

        // Update Tag
        return $this->tag->update($this->data, $this->id);
    }
}
