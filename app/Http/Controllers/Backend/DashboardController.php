<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Post;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
        $blogPostsCount = Post::where('type', 'blog')->count();
        $workPostsCount = Post::where('type', 'work')->count();
        $usersCount = User::all()->count();

        return view('backend.dashboard.index', compact('blogPostsCount', 'workPostsCount', 'usersCount'));
    }
}
