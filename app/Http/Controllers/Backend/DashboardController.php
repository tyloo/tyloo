<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use App\Repositories\UserRepository;
use App\Repositories\WorkRepository;

class DashboardController extends Controller
{
    public function index()
    {
        $postsCount = app(PostRepository::class)->all()->count();
        $worksCount = app(WorkRepository::class)->all()->count();
        $usersCount = app(UserRepository::class)->all()->count();

        return view('backend.dashboard.index', compact('postsCount', 'worksCount', 'usersCount'));
    }
}
