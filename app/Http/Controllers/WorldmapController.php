<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorldmapController extends Controller
{
	public function index(Request $request) {
		return view('worldmap.index');
	}
}
