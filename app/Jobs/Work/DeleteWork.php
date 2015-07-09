<?php

namespace App\Jobs\Work;

use App\Jobs\Job;
use App\Repositories\WorkRepository;
use Illuminate\Contracts\Bus\SelfHandling;

class DeleteWork extends Job implements SelfHandling
{
    /**
     * @var \App\Repositories\WorkRepository
     */
    protected $work;

    /**
     * @var null|int
     */
    protected $id;

    /**
     * Create a new job instance.
     *
     * @param \App\Repositories\WorkRepository $work
     * @param int                              $id
     */
    public function __construct(WorkRepository $work, $id = 0)
    {
        $this->work = $work;
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Delete Work
        return $this->work->delete($this->id);
    }
}
