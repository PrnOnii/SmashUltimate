<!DOCTYPE html>
<html lang="{{ Session::get("locale", config('app.locale')) }}">
<head>
	<link rel="icon" type="image/png" href="{{ asset("img/favicon-16x16.png") }}" sizes="16x16" />
	<link rel="icon" type="image/png" href="{{ asset("img/favicon-32x32.png") }}" sizes="32x32" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="{{ trans('layout.meta.description') }}" />
	<meta name="author" content="Onii =D, Volya">
	<meta name="keywords" content="" />
	<meta property="og:title" content="Smash Ultimate FR" />
	<meta property="og:description" content="{{ trans('layout.meta.description') }}" />
	<meta property="og:image" content="{{ asset("img/logocouleur.png") }}">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="506">
	<meta property="og:image:height" content="314">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>@yield('title') | {{ config('app.name', 'Smash Ultimate FR') }}</title>

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- ===== Styles ===== -->
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- SmashUltimate.fr Core CSS -->
	<link href="{{ asset('css/smashultimate.css') }}" rel="stylesheet">

	<!-- Datatables -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>

	<!-- Fontawesome 5 -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Fullcalendar.js -->
	<link rel='stylesheet' href='{{ asset('fullcalendar/fullcalendar.css') }}'>

	<!-- Flags -->
	<link rel="stylesheet" href="{{ asset("css/flags/flags.min.css") }}">

	<!-- Lightbox -->
	<link rel="stylesheet" href="{{ asset("css/lightbox.css") }}">

	<!-- View specific css -->
	@yield('styles')

</head>
<body>

<!-- ====== NAVIGATION ====== -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand logo" href="{{ route('home') }}"></a>
		<button class="navbar-toggler navbar-toggler-right"
						type="button"
						data-toggle="collapse"
						data-target="#navbarResponsive"
						aria-controls="navbarResponsive"
						aria-expanded="false"
						aria-label="Toggle navigation"
		>
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto menuSmash">
				<li class="nav-item {{ Request::is('/') ? 'active' : ''}}">
					<a class="nav-link" href="{{ route('home') }}">
						{{ mb_strtoupper(trans('layout.navbar.home'), 'UTF-8') }}
					</a>
				</li>

				<li class="nav-item {{ Request::is('planning') ? 'active' : ''}}">
					<a class="nav-link" href="{{ route('planning') }}">
						{{ mb_strtoupper(trans('layout.navbar.calendar'), 'UTF-8') }}
					</a>
				</li>

				<li class="nav-item {{ Request::is('ranking') ? 'active' : ''}}">
					<a class="nav-link" href="{{ route('ranking') }}">
						{{ mb_strtoupper(trans('layout.navbar.ranking'), 'UTF-8') }}
					</a>
				</li>

				<!-- COMMUNITY DROPDOWN -->
				<li class="nav-item dropdown {{ Request::is('community') ? 'active' : ''}}">
					<a class="nav-link dropdown-toggle"
					   href="#"
					   id="communityDropdown"
					   role="button"
					   data-toggle="dropdown"
					   aria-haspopup="true"
					   aria-expanded="false"
					>
						{{ mb_strtoupper(trans('layout.navbar.community'), 'UTF-8') }}
					</a>
					<div class="dropdown-menu" aria-labelledby="communityDropdown">
						<a class="dropdown-item" href="{{ route('communities.map') }}">
							{{ mb_strtoupper(trans('layout.navbar.map'), 'UTF-8') }}
						</a>
						<a class="dropdown-item" href="{{ route('communities.contact') }}">
							{{ mb_strtoupper(trans('layout.navbar.contact'), 'UTF-8') }}
						</a>
					</div>
				</li>

				<li class="nav-item {{ Request::is('VODs') ? 'active' : ''}}">
					<a class="nav-link" href="{{ route('VOD') }}">
						{{ mb_strtoupper(trans('layout.navbar.vod'), 'UTF-8') }}
					</a>
				</li>

				<li class="nav-item {{ Request::is('contact') ? 'active' : ''}}">
					<a class="nav-link" href="{{ route('team') }}">
						{{ mb_strtoupper(trans('layout.navbar.about'), 'UTF-8') }}
					</a>
				</li>

				<!-- LANG DROPDOWN -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle"
					   href="#"
					   id="langDropdown"
					   role="button"
					   data-toggle="dropdown"
					   aria-haspopup="true"
					   aria-expanded="false"
					>
						{{ strtoupper(Session::get("locale", config('app.locale'))) }}
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="langDropdown">
						@foreach(config("app.locales") as $locale)
							<a class="dropdown-item" href="{{ action("HomeController@language", ["lang" => $locale]) }}">
								<img src="{{ asset("/img/blank.gif") }}" class="flag flag-{{ $locale }}"> {{ strtoupper($locale) }}
							</a>
						@endforeach
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>


<!-- ====== BANNER ====== -->
@if(Request::is('/'))
<section id="banner">
	<h2>{{ trans("home.banner.title") }}</h2>
	<p>{{ trans("home.banner.description") }}</p>
</section>
@endif

@if(false)
<!-- ====== SESSION FLASH ====== -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			@if (session('confirmation-success'))
				<div class="alert alert-success">
					{{ session('confirmation-success') }}
				</div>
			@endif
			@if (session('confirmation-danger'))
				<div class="alert alert-danger">
					{!! session('confirmation-danger') !!}
				</div>
			@endif
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
		</div>
	</div>
</div>
@endif
<!-- ====== MAIN CONTENT ====== -->
<div class="container
@if(!Request::is('/'))
	navspace
@endif
	">
	@yield('content')
</div>

<!-- ====== FOOTER ====== -->
<footer id="footer">
	<div class="container">
		<div class="copyright">
			<li>&copy; 2018 SmashUltimate.fr</li>
			<li>{{ trans('layout.footer.contact') }} :
				<a href="contact@smashultimate.fr">contact@smashultimate.fr</a>
			</li>
			<li>{{ trans('layout.footer.madeBy') }}
				<a href="https://twitter.com/PrnOnii">Onii</a> &
				<a href="http://twitter.com/VolyaSSB">Volya</a>
			</li>
		</div>
	</div>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://unpkg.com/sweetalert2@7.24.1/dist/sweetalert2.all.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
<script src="{{ asset('js/moment.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script>
		// $(".chosen").chosen();
</script>
<script src='{{ asset("fullcalendar/fullcalendar.js") }}'></script>
<script src="{{ asset('fullcalendar/gcal.js') }}"></script>
<script src="{{ asset('fullcalendar/locale-all.js') }}"></script>
<script src="{{ asset('js/lightbox.js') }}"></script>
@yield('scripts')

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135196255-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-135196255-1');
</script>
</body>
</html>