<?php

namespace App\Jobs\User;

use App\Jobs\Job;
use App\Repositories\UserRepository;
use Illuminate\Contracts\Bus\SelfHandling;

class DeleteUser extends Job implements SelfHandling
{
    /**
     * @var \App\Repositories\UserRepository
     */
    protected $user;

    /**
     * @var null|int
     */
    protected $id;

    /**
     * Create a new job instance.
     *
     * @param \App\Repositories\UserRepository $user
     * @param int                              $id
     */
    public function __construct(UserRepository $user, $id = 0)
    {
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
        // Delete User
        return $this->user->delete($this->id);
    }
}
