<?php

namespace app\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('backend.pages.dashboard');
    }
}
