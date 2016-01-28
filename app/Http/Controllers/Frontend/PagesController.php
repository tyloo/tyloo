<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Jobs\SendContactEmail;
use App\Repositories\WorkRepository;

class PagesController extends Controller
{
    /**
     * @var \App\Repositories\WorkRepository
     */
    private $works;

    public function __construct(WorkRepository $works)
    {
        $this->works = $works;
    }

    /**
     * Home Page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        $works = $this->works->all();

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

        return view('frontend.pages.contact')->withSuccess(trans('app.frontend.contact.confirmMailSent'));
    }
}
