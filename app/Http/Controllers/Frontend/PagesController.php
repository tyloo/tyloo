<?php

namespace app\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function resume()
    {
        return view('frontend.pages.resume');
    }

    public function works()
    {
        return view('frontend.pages.works');
    }

    public function blog()
    {
        return view('frontend.pages.blog');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function search()
    {
        return view('frontend.pages.search');
    }
}
