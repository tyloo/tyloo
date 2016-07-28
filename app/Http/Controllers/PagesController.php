<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    /**
     * Home page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Resume page.
     *
     * @return \Illuminate\View\View
     */
    public function resume()
    {
        return view('pages.resume');
    }

    /**
     * Projects page.
     *
     * @return \Illuminate\View\View
     */
    public function projects()
    {
        return view('pages.projects');
    }

    /**
     * Blog page.
     *
     * @return \Illuminate\View\View
     */
    public function blog()
    {
        return view('pages.blog');
    }

    /**
     * Contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Contact page handling.
     *
     * @return \Illuminate\View\View
     */
    public function postContact()
    {
        return view('pages.contact');
    }
}
