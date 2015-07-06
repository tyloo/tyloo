<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        view()->composer(
            ['frontend.partials.common.footer._lastPosts', 'frontend.partials.blog.blocks.lastPosts'],
            'App\ViewComposers\LastPostsViewComposer'
        );
        view()->composer('frontend.pages.blog.*', 'App\ViewComposers\PostTagsViewComposer');
        view()->composer('backend.*', 'App\ViewComposers\LoggedInUserViewComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
