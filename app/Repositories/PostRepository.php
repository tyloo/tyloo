<?php namespace App\Repositories;

use App\Post;

class PostRepository extends AbstractRepository implements RepositoryInterface
{
    /**
     * The model linked to our resources.
     *
     * @var
     */
    protected $model = Post::class;
}
