<?php

namespace App\Repositories;

use App\User;
use SebastianBerc\Repositories\Contracts\ShouldCache;

class UsersRepository extends AbstractRepository implements ShouldCache
{
    /**
     * Return fully qualified model class name.
     *
     * @return string
     */
    public function takeModel()
    {
        return User::class;
    }
}
