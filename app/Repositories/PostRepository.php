<?php

namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

class PostRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model()
    {
        return 'App\Post';
    }
}
