<?php

namespace App\Repositories;

use App\Post;
use SebastianBerc\Repositories\Contracts\ShouldCache;

class PostsRepository extends AbstractRepository implements ShouldCache
{
    /**
     * Return fully qualified model class name.
     *
     * @return string
     */
    public function takeModel()
    {
        return Post::class;
    }
}
