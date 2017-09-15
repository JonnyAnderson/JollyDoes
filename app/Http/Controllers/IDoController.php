<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IDoController extends Controller
{
    //

	public function index()
	{
		return view('ido.index');
	}

}
