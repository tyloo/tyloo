<?php

namespace Modules\Blog\Http\Controllers;

use Nwidart\Modules\Routing\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog::index');
    }
}
