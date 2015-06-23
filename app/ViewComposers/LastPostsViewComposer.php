<?php

namespace App\ViewComposers;

use App\Repositories\Criteria\LastFive;
use App\Repositories\PostRepository;
use Illuminate\View\View;

class LastPostsViewComposer
{
    /**
     * The Post repository implementation.
     *
     * @var \App\Repositories\PostRepository
     */
    private $post;

    /**
     * Create a new Last Posts composer.
     *
     * @param PostRepository $post
     */
    public function __construct(PostRepository $post)
    {
        // Dependencies automatically resolved by service container...
        $this->post = $post;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $this->post->pushCriteria(new LastFive());
        $view->with('lastPosts', $this->post->all());
    }
}
