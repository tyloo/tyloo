<?php namespace App\Repositories;

use App\Post;

class PostsRepository extends AbstractRepository
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
