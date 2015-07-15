<?php

namespace App\ViewComposers;

use App\Post;
use Illuminate\View\View;

class LastPostsViewComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     */
    public function compose(View $view)
    {
        $posts = Post::where('type', 'blog')->take(5)->get();
        $view->with('lastPosts', $posts);
    }
}
