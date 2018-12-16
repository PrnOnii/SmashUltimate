<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(Request $request) {
		$settings = [
			'oauth_access_token' => "471925848-JnPv1lmRB0o6JxAJlnCCklRYJKeUhm35yCU2OWi1",
			'oauth_access_token_secret' => "ngIKT6rGaSUQ8xquhhToWuyxjEUwwbc1aR8wLXn4ZHqcn",
			'consumer_key' => "7yE2muaMRY79stzYPQuuGFaIC",
			'consumer_secret' => "5WSebgcTysuuTEp5ONmUDc6YdarJ1VVYneZooaReVuxL3KOkUN"
		];

		$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
		$getField = '?screen_name=SmashUltimateFR';
		$requestMethod = 'GET';

		$twitter = new \TwitterAPIExchange($settings);
		$response = $twitter->setGetfield($getField)
			->buildOauth($url, $requestMethod)
			->performRequest();
		$tweets = \GuzzleHttp\json_decode($response);
		foreach ($tweets as $tweet) {
			$timestamp = \DateTime::createFromFormat('D M d H:i:s O Y', $tweet->created_at);
			$tweet->created_at = date('d F Y', $timestamp->getTimestamp());

			// The Regular Expression filter
			$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
			if(preg_match($reg_exUrl, $tweet->text, $url)) {
				$tweet->text = preg_replace($reg_exUrl, "<a href=" . $url[0] . ">{$url[0]}</a> ", $tweet->text);
			}
		}
//		dd($tweets);
		return view('home', [
			"tweets" => $tweets
		]);
	}

	public function language(Request $request, $lang) {
		$request->session()->put("locale", $lang);

		return redirect()->back();
	}
}