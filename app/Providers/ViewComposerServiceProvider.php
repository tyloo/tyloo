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
        view()->composer('frontend.pages.*', 'App\ViewComposers\LastPostsComposer');
        view()->composer('frontend.pages.blog.*', 'App\ViewComposers\PostTagsComposer');
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
