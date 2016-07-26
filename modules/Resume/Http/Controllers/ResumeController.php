<?php

namespace Modules\Resume\Http\Controllers;

use Nwidart\Modules\Routing\Controller;

class ResumeController extends Controller {

	public function index()
	{
		return view('resume::index');
	}

}
