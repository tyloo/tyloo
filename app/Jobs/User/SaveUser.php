<?php

namespace App\Jobs\User;

use App\Http\Requests\UserRequest;
use App\Jobs\Job;
use App\Repositories\UserRepository;
use Illuminate\Contracts\Bus\SelfHandling;

class SaveUser extends Job implements SelfHandling
{
    /**
     * @var \App\Http\Requests\UserRequest
     */
    protected $request;

    /**
     * @var \App\Repositories\UserRepository
     */
    protected $user;

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
     * @param \App\Http\Requests\UserRequest   $request
     * @param \App\Repositories\UserRepository $user
     * @param string                           $id
     */
    public function __construct(UserRequest $request, UserRepository $user, $id = null)
    {
        $this->request = $request;
        $this->data = $request->except(['_token', '_method']);
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
