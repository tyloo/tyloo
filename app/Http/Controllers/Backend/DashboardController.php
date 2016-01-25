<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use App\Work;

class DashboardController extends Controller
{
    public function index()
    {
        $blogPostsCount = Post::all()->count();
        $workPostsCount = Work::all()->count();
        $usersCount = User::all()->count();

        return view('backend.dashboard.index', compact('blogPostsCount', 'workPostsCount', 'usersCount'));
    }
}
