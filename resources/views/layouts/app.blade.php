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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>{{ config('app.name', 'Smash Ultimate FR') }} | {{ trans('layout.meta.title') }}</title>

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- ===== Styles ===== -->
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- SmashUltimate.fr Core CSS -->
	<link href="{{ asset('css/smashultimate.css') }}" rel="stylesheet">

	<!-- Datatables -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/sl-1.2.6/datatables.min.css"/>

	<!-- Fontawesome 5 -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Fullcalendar.js -->
	<link rel='stylesheet' href='{{ asset('fullcalendar/fullcalendar.css') }}'>

	<!-- Flags -->
	<link rel="stylesheet" href="{{ asset("css/flags/flags.min.css") }}">

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
			<ul class="navbar-nav ml-auto">
				<li class="nav-item {{ Request::is('/') ? 'active' : ''}}">
					<a class="nav-link" href="{{ route('home') }}">
						<i class="fas fa-home"></i> {{ trans('layout.navbar.home') }}
					</a>
				</li>
				<li class="nav-item {{ Request::is('planning') ? 'active' : ''}}">
					<a class="nav-link" href="{{ route('planning') }}">
						<i class="fas fa-calendar-alt"></i> {{ trans('layout.navbar.calendar') }}
					</a>
				</li>
				<li class="nav-item {{ Request::is('VODs') ? 'active' : ''}}">
					<a class="nav-link" href="{{ route('VOD') }}">
						<i class="fas fa-video"></i> {{ trans('layout.navbar.vod') }}
					</a>
				</li>
				<li class="nav-item {{ Request::is('ranking') ? 'active' : ''}}">
					<a class="nav-link" href="{{ route('ranking') }}">
						<i class="fas fa-trophy"></i> {{ trans('layout.navbar.ranking') }}
					</a>
				</li>
				<li class="nav-item {{ Request::is('worldmap') ? 'active' : ''}}">
					<a class="nav-link" href="{{ route('worldmap') }}">
						<i class="fas fa-globe"></i> {{ trans('layout.navbar.map') }}
					</a>
				</li>
				<li class="nav-item {{ Request::is('contact') ? 'active' : ''}}">
					<a class="nav-link" href="{{ route('contact') }}">
						<i class="far fa-user"></i> {{ trans('layout.navbar.contact') }}
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle"
					   href="#"
					   id="navbarDropdown"
					   role="button"
					   data-toggle="dropdown"
					   aria-haspopup="true"
					   aria-expanded="false"
					>
						{{ Session::get("locale", config('app.locale')) }}
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						@foreach(config("app.locales") as $locale)
							<a class="dropdown-item" href="{{ action("HomeController@language", ["lang" => $locale]) }}">
								<img src="{{ asset("/img/blank.gif") }}" class="flag flag-{{ $locale }}"> {{ $locale }}
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
</footer>

<!-- Scripts -->
<script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src
="https://unpkg.com/sweetalert2@7.24.1/dist/sweetalert2.all.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/sl-1.2.6/datatables.min.js"></script>
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('js/SmashUltimate.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script>
		// $(".chosen").chosen();
</script>
<script src='{{ asset("fullcalendar/fullcalendar.js") }}'></script>
<script src="{{ asset('fullcalendar/gcal.js') }}"></script>
<script src="{{ asset('fullcalendar/locale-all.js') }}"></script>
@yield('scripts')
</body>
</html>
