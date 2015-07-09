<?php

namespace App\Jobs\User;

use App\Jobs\Job;
use App\Repositories\UserRepository;
use Illuminate\Contracts\Bus\SelfHandling;

class SaveUser extends Job implements SelfHandling
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @var \App\Repositories\UserRepository
     */
    protected $user;

    /**
     * @var integer|null
     */
    protected $id;

    /**
     * Create a new job instance.
     *
     * @param array                            $data
     * @param \App\Repositories\UserRepository $user
     * @param integer|null                     $id
     */
    public function __construct(array $data = [], UserRepository $user, $id = null)
    {
        $this->data = $data;
        $this->user = $user;
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // New User
        if ($this->id === null) {
            return $this->user->create($this->data);
        }

        // Update User
        return $this->user->update($this->data, $this->id);
    }
}
