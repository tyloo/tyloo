<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('backend.settings.edit');
    }

    public function update()
    {
        return response('OK', 200);
    }
}
