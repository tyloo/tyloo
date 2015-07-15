<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\UsersRepository;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * @var \App\Repositories\UsersRepository
     */
    protected $user;

    public function __construct(UsersRepository $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $user = $this->user->find(Auth::id());

        return view('auth.profile', compact('user'));
    }
}
