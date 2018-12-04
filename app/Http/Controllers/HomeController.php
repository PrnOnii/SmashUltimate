<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(Request $request) {
		return view('home');
	}

	public function language(Request $request, $lang) {
		$request->session()->put("locale", $lang);

		return redirect()->back();
	}
}
