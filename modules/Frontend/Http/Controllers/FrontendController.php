<?php

namespace Modules\Frontend\Http\Controllers;

use Nwidart\Modules\Routing\Controller;

class FrontendController extends Controller {

	public function index()
	{
		return view('frontend::index');
	}

}
