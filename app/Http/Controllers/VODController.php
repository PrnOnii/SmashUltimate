<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class VODController extends Controller
{
	public function index(Request $request) {
//		$client = new Client();
//		$res = $client->request('GET', 'https://api.twitter.com/1.1/search');
//		dd($res);
//		$tweets = [];
		return view('VOD.index');
	}
}
