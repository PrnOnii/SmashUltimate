<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Smash Ultimate FR') }}</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/SmashUltimate.css') }}" rel="stylesheet">
	<link href="{{ asset('css/chosen.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/tooltipster.bundle.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/tooltip-themes/shadow.css') }}" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/sl-1.2.6/datatables.min.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel='stylesheet' href='{{ asset('fullcalendar/fullcalendar.css') }}'>
	@yield('styles')

</head>
<body>
<div id="app">
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="{{ route('home') }}">
				{{ config('app.name', 'Smash Ultimate FR') }}
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item {{ Request::is('/') ? 'active' : ''}}">
						<a class="nav-link" href="{{ route('home') }}">
							<i class="fas fa-home"></i> Acceuil
						</a>
					</li>
					<li class="nav-item {{ Request::is('planning') ? 'active' : ''}}">
						<a class="nav-link" href="{{ route('planning') }}">
							<i class="fas fa-calendar-alt"></i> Planning
						</a>
					</li>
					<li class="nav-item {{ Request::is('VODs') ? 'active' : ''}}">
						<a class="nav-link" href="{{ route('VOD') }}">
							<i class="fas fa-video"></i> VODs
						</a>
					</li>
					<li class="nav-item {{ Request::is('ranking') ? 'active' : ''}}">
						<a class="nav-link" href="{{ route('ranking') }}">
							<i class="fas fa-trophy"></i> Ranking
						</a>
					</li>
					<li class="nav-item {{ Request::is('worldmap') ? 'active' : ''}}">
						<a class="nav-link" href="{{ route('worldmap') }}">
							<i class="fas fa-globe"></i> Mappemonde
						</a>
					</li>
					<li class="nav-item {{ Request::is('contact') ? 'active' : ''}}">
						<a class="nav-link" href="{{ route('contact') }}">
							<i class="far fa-user"></i> Contacts
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row mt-3">
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
	@yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://unpkg.com/sweetalert2@7.24.1/dist/sweetalert2.all.js"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tooltipster.bundle.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/sl-1.2.6/datatables.min.js"></script>
<script type="text/javascript"  src="{{ asset('js/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('js/moment.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script>
		$(".chosen").chosen();
</script>
<script src='{{ asset("fullcalendar/fullcalendar.js") }}'></script>
<script src="{{ asset('fullcalendar/gcal.js') }}"></script>
<script src="{{ asset('fullcalendar/locale-all.js') }}"></script>
@yield('scripts')
</body>
</html>
