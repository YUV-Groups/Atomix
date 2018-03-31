<?php

namespace Atomix\Http\Controllers;

use Auth;
use Atomix\Models\Creations;

class ShowcaseController extends Controller
{
	public function display()
	{
		if(Auth::check())
		{
			$creations = Creations::all();

			return view('display')->with('data', $creations);
		}
		return view('home');
	}
}