<?php

namespace App\ViewComposers;

use App\Repositories\PostsRepository;
use Illuminate\View\View;

class LastPostsViewComposer
{
    /**
     * The Post repository implementation.
     *
     * @var \App\Repositories\PostsRepository
     */
    private $repository;

    /**
     * Create a new Last Posts composer.
     *
     * @param PostsRepository $repository
     */
    public function __construct(PostsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     */
    public function compose(View $view)
    {
        $view->with('lastPosts', $this->repository->all());
    }
}
