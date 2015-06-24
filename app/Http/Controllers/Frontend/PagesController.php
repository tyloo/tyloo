<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Jobs\SendContactEmail;

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

    public function getContact()
    {
        return view('frontend.pages.contact');
    }

    public function postContact(ContactRequest $request)
    {
        $this->dispatch(new SendContactEmail($request->all()));

        return view('frontend.pages.contact')->withSuccess('Your contact form has been received. I\'ll try to answer you as soon as possible! Thank you ;)');
    }
}
