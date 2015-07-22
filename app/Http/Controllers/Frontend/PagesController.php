<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Home Page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        \Bugsnag::notifyError('ErrorType', 'Test Error');

        return view('frontend.pages.home');
    }

    /**
     * Resume Page.
     *
     * @return \Illuminate\View\View
     */
    public function resume()
    {
        return view('frontend.pages.resume');
    }
}
