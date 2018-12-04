<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\http\Request;
use Cookie;

class Language
{

	/**
	 * @param Request $request
	 * @param Closure $next
	 * @return mixed
	 */
	public function handle(Request $request, Closure $next)
	{
		App::setLocale($request->session()->get('locale', config('app.locale')));

		return $next($request);
	}

}