<?php

namespace App\ViewComposers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class LoggedInUserViewComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $user = Cache::remember('user', 1440, function() {
            return Auth::user();
        });
        $view->with('user', $user);
    }
}
