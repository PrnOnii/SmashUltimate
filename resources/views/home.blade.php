@extends("layouts.app")

@section('title')
	Smash Ultimate FR
@endsection

@section("content")
<div class="row my-4">
	<div class="col-lg-3 border rounded p-3">
		<div class="container">
			<div class="row">
				<h3 class="mx-auto">
					<a href="{{ route('planning') }}" class="btn-link">
						<i class="fas fa-calendar-alt"></i> {{ trans("home.calendar") }}
					</a>
				</h3>
			</div>
			<div class="row">
				<div id="calendar" class="mx-auto"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-sm-12 border rounded p-3">
		<div class="container">
			<div class="row">
				<h3 class="mx-auto">
					<a href="http://twitter.com/SmashUltimateFr">
						<i class="fab fa-twitter"></i> {{ trans("home.twitter") }}
					</a>
				</h3>
		</div>
			<div class="row">
				<img src="{{ asset("img/construction.png") }}" class="mx-auto d-block mt-5" alt="Under Construction">
			</div>
			<div class="row">
				<h3 class="mx-auto mt-3">{{ trans("home.construction") }}</h3>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-sm-12 border rounded p-3">
		<div class="row">
			<h3 class="mx-auto">{{ trans("home.twitch") }}</h3>
		</div>
		<div class="row">
			<img src="{{ asset("img/construction.png") }}" class="mx-auto d-block mt-5" alt="Under Construction">
		</div>
		<div class="row">
			<h3 class="mx-auto mt-3">{{ trans("home.construction") }}</h3>
		</div>
	</div>
</div>
@endsection

@section('scripts')
<script>
	$('#calendar').fullCalendar({
			locale: '{{ config('app.locale') }}',
			googleCalendarApiKey: 'AIzaSyAqmSdhqBul-tb1irm1HnBF4YOSbqLY5-g',
			events: {
					googleCalendarId: 'pgduilavtc2m2ja7tiqvng413o@group.calendar.google.com'
			},
			header: {
				left: 'prev',
				center: 'title',
				right: 'next'
			},
			views: {
				listMonth: {
					duration: { days: 90 },
					listDayAltFormat: 'dddd',
					buttonText: 'Month',
					titleFormat: 'MMM YYYY'
				}
			},
			defaultView: 'listMonth',
			navLinks: true,
			eventLimit: true,
			height: 'auto',
			eventClick: function(event, jsEvent, view) {
				return false;
			},
			eventRender: function(event, element, view) {
				var eventEnd = moment(event.end);
				var NOW = moment();
				if (eventEnd.diff(NOW, 'seconds') <= 0) {
					return false;
				}
			},
	});

	function decodeHtmlSpecialCHars(text = "") {
		var map = {
			'&amp;': '&',
			'&#038;': "&",
			'&lt;': '<',
			'&gt;': '>',
			'&quot;': '"',
			'&#039;': "'",
			'&#8217;': "’",
			'&#8216;': "‘",
			'&#8211;': "–",
			'&#8212;': "—",
			'&#8230;': "…",
			'&#8221;': '”'
		};

		return text.replace(/\&[\w\d\#]{2,5}\;/g, function(m) { return map[m]; });
	}
</script>
@endsection