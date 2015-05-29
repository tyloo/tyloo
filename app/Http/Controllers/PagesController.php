<?php namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function resume()
    {
        return view('pages.resume');
    }

    public function works()
    {
        return view('pages.works');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function search()
    {
        return view('pages.search');
    }
}
