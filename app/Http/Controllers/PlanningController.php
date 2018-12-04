<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanningController extends Controller
{
	public function index() {
		$client = new \Google_Client();
		$client->setApplicationName("Smash Ultimate Fr");
		$client->setDeveloperKey("AIzaSyAqmSdhqBul-tb1irm1HnBF4YOSbqLY5-g");

		$service = new \Google_Service_Calendar($client);
		$events = $service->events->listEvents("pgduilavtc2m2ja7tiqvng413o@group.calendar.google.com");

//		dd($events->items);
		return view('planning.index');
	}
}
