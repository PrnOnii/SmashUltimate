@extends("layouts.app")

@section('title')
	Smash Ultimate FR
@endsection

@section("content")
<div class="row my-4">
	<div class="col-3 hidden-xs border rounded p-3">
		<div class="container">
			<div class="row">
				<h3 class="text-center">
					<a href="{{ route('planning') }}" class="btn-link">
						<i class="fas fa-calendar-alt"></i> {{ trans("home.calendar") }}
					</a>
				</h3>
			</div>
			<div class="row">
				<div id="calendar"></div>
			</div>
		</div>
	</div>
	<div class="col-6 col-xs-12 border rounded">
		<h3>{{ trans("home.twitter") }}</h3>
	</div>
	<div class="col-3 hidden-xs border rounded">
		<h3>{{ trans("home.twitch") }}</h3>
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
			}
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