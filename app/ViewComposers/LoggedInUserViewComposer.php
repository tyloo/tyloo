<?php

namespace App\ViewComposers;

use Illuminate\Support\Facades\Auth;
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
        $view->with('user', Auth::user());
    }
}
