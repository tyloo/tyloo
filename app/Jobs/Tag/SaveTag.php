<?php

namespace App\Jobs\Tag;

use App\Jobs\Job;
use App\Repositories\TagRepository;
use Illuminate\Contracts\Bus\SelfHandling;

class SaveTag extends Job implements SelfHandling
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @var \App\Repositories\TagRepository
     */
    protected $tag;

    /**
     * @var integer|null
     */
    protected $id;

    /**
     * Create a new job instance.
     *
     * @param array                           $data
     * @param \App\Repositories\TagRepository $tag
     * @param integer|null                    $id
     */
    public function __construct(array $data = [], TagRepository $tag, $id = null)
    {
        $this->data = $data;
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
        // New Tag
        if ($this->id === null) {
            return $this->tag->create($this->data);
        }

        // Update Tag
        return $this->tag->update($this->data, $this->id);
    }
}
