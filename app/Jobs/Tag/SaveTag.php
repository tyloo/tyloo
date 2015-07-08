<?php

namespace App\Jobs\Tag;

use App\Http\Requests\TagRequest;
use App\Jobs\Job;
use App\Repositories\TagRepository;
use Illuminate\Contracts\Bus\SelfHandling;

class SaveTag extends Job implements SelfHandling
{
    /**
     * @var \App\Http\Requests\TagRequest
     */
    protected $request;

    /**
     * @var \App\Repositories\TagRepository
     */
    protected $tag;

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
     * @param \App\Http\Requests\TagRequest   $request
     * @param \App\Repositories\TagRepository $tag
     * @param string                          $id
     */
    public function __construct(TagRequest $request, TagRepository $tag, $id = null)
    {
        $this->request = $request;
        $this->data = $request->except(['_token', '_method']);
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
