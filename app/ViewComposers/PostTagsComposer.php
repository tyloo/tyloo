<?php

namespace App\ViewComposers;

use App\Repositories\Criteria\LastFive;
use App\Repositories\TagRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PostTagsComposer
{
    /**
     * The Post repository implementation.
     *
     * @var \App\Repositories\PostRepository
     */
    private $tag;

    /**
     * Create a new Last Posts composer.
     *
     * @param TagRepository $tag
     */
    public function __construct(TagRepository $tag)
    {
        // Dependencies automatically resolved by service container...
        $this->tag = $tag;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $this->tag->pushCriteria(new LastFive());
        $view->with('postTags', $this->tag->all());
    }
}
