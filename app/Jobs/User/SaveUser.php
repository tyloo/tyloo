<?php

namespace App\Jobs\User;

use App\Jobs\Job;
use App\Repositories\UserRepository;
use Illuminate\Contracts\Bus\SelfHandling;

class SaveUser extends Job implements SelfHandling
{
    /**
     * @var \App\Repositories\UserRepository
     */
    protected $user;

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
     * @param \App\Repositories\UserRepository $user
     * @param array                            $data
     * @param integer|null                     $id
     */
    public function __construct(UserRepository $user, array $data = [], $id = null)
    {
        $this->user = $user;
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
        // New User
        if ($this->id === null) {
            return $this->user->create($this->data);
        }

        // Update User
        return $this->user->update($this->data, $this->id);
    }
}
