@extends("layouts.app")

@section('title')
	Planning
@endsection

@section('styles')
@endsection

@section("content")
	<div class="container">
		<div id="calendar"></div>
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
				left: 'prev,next today',
				center: 'title',
				right: 'month,listMonth,listYear'
			},
			views: {
				listMonth: {
					buttonText: 'Liste Mois'
				},
				listYear: {
					buttonText: 'Liste Année'
				}
			}
		})
	</script>
@endsection