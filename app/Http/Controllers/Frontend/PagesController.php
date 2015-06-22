<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

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

    public function getContact()
    {
        return view('frontend.pages.contact');
    }

    public function postContact(ContactRequest $request)
    {
        Mail::queue('emails.contact', ['data' => $request->all()], function ($m) {
            $m->to('jbonva@gmail.com', 'Julien Bonvarlet')->subject('[Tyloo.fr] Demande de Contact');
        });
        return view('frontend.pages.contact')->withSuccess('Your contact form has been received. I\'ll try to answer you as soon as possible! Thank you ;)');
    }

    public function search()
    {
        return view('frontend.pages.search');
    }
}
