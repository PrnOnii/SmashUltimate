@extends("layouts.app")

@section('title')
	Smash Ultimate FR
@endsection

@section("content")
	<div class="container" style="height: 100%">
		<div class="row">
			<div class="col-3 border rounded h-100">
				<div class="container">
					<div class="row">
						<h3 class="text-center">
							<a href="{{ route('planning') }}" class="btn-link">
								<i class="fas fa-calendar-alt"></i> Planning
							</a>
						</h3>
					</div>
					<div class="row">
						<div id="calendar"></div>
					</div>
				</div>
			</div>
			<div class="col-6 border border-white rounded">
				<h1>Feed twitter</h1>
			</div>
			<div class="col-3 border rounded">
				<h1>List des streams</h1>
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
							buttonText: 'Month',
							titleFormat: 'MMM YYYY'
						}
					},
					defaultView: 'listMonth',
					navLinks: true,
					eventLimit: true,
					height: 'auto'
			})
	</script>
@endsection