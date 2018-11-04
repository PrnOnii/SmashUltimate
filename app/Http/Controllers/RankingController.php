<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankingController extends Controller
{
	public function index(Request $request) {
		return view('ranking.index');
	}
}
