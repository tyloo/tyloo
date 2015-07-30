<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Jobs\SendContactEmail;
use App\Repositories\PagesRepository;
use App\Repositories\PostsRepository;
use Flynsarmy\DbBladeCompiler\Facades\DbView;

class PagesController extends Controller
{
    /**
     * Home Page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        $works = PostsRepository::instance()->all();

        return view('frontend.pages.home', compact('works'));
    }

    /**
     * Resume Page.
     *
     * @return \Illuminate\View\View
     */
    public function resume()
    {
        return view('frontend.pages.resume');
    }

    /**
     * Contact form.
     *
     * @return \Illuminate\View\View
     */
    public function getContact()
    {
        return view('frontend.pages.contact');
    }

    /**
     * Send the Contact request.
     *
     * @param \App\Http\Requests\ContactRequest $request
     *
     * @return \Illuminate\View\View
     */
    public function postContact(ContactRequest $request)
    {
        $this->dispatch(new SendContactEmail($request->all()));

        return view('frontend.pages.contact')->withSuccess(trans('app.contact.confirmMailSent'));
    }
}
