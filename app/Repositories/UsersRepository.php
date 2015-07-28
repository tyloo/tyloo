<?php

namespace App\Repositories;

use App\User;

class UsersRepository extends AbstractRepository
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
