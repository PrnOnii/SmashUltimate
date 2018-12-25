<?php

namespace App\Http\Controllers;

use App\Ranking;
use Illuminate\Http\Request;

class RankingController extends Controller
{
	public function index(Request $request) {
		$rankings = Ranking::orderBy('name', 'desc')->get();
		$games = ["Ultimate", "WiiU"];
		$types = ["global", "regional"];
		return view('ranking.index', [
			"rankings" => $rankings,
			"games" => $games,
			"types" => $types,
			"isFirst" => true,
		]);
	}
}
