<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
	public function worldmap(Request $request) {
		return view('community.map');
	}

	public function contact(Request $request) {
		$communities = Contact::all();
		return view('community.contact', [
			"communities" => $communities
		]);
	}
}
