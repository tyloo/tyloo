<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function edit()
    {
        return view('backend.settings.edit');
    }

    public function update()
    {
        return 'OK';
    }
}
