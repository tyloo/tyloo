<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Tag;
use App\Work;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $works = Work::with('tags')->latest()->get();
        $tags = Tag::all();

        return view('frontend.pages.works.index', compact('works', 'tags'));
    }

    /**
     * Display the specified resource.
     *
     * @param string $slug
     *
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $work = Work::where('slug', $slug)->firstOrFail();
        $works = Work::latest()->get();

        return view('frontend.pages.works.show', compact('work', 'works'));
    }
}
