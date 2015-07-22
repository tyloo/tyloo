<?php

namespace App\ViewComposers;

use App\Repositories\Criteria\LastFive;
use App\Repositories\Criteria\PostType;
use App\Repositories\PostsRepository;
use Illuminate\View\View;

class LastPostsViewComposer
{
    /**
     * @var \App\Repositories\PostsRepository
     */
    protected $repository;

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
        $posts = $this->repository
            ->criteria(new PostType('blog'))
            ->criteria(new LastFive())
            ->all();
        $view->with('lastPosts', $posts);
    }
}
