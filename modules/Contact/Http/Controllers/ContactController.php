<?php

namespace Modules\Contact\Http\Controllers;

use Nwidart\Modules\Routing\Controller;

class ContactController extends Controller {

	public function index()
	{
		return view('contact::index');
	}

}
