<?php

namespace App\Http\Controllers\Backend\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    /**
     * Redirect if login form passes.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Redirect if login form is invalid.
     *
     * @var string
     */
    protected $loginPath = '/admin/auth/login';
}
