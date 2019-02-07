@extends("layouts.app")

@section('title')
	Planning
@endsection

@section('styles')
@endsection

@section("content")
	<div id="calendar" class="mb-5"></div>
@endsection

@section('scripts')
	<script>
		var test;
		$('#calendar').fullCalendar({
			locale: '{{ config('app.locale') }}',
			googleCalendarApiKey: 'AIzaSyAqmSdhqBul-tb1irm1HnBF4YOSbqLY5-g',
			events: {
				googleCalendarId: 'pgduilavtc2m2ja7tiqvng413o@group.calendar.google.com',
				// color: event.colorId
			},
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,listMonth,listYear'
			},
			views: {
				listMonth: {
					buttonText: "{{ trans("calendar.views.listMonth") }}"
				},
				listYear: {
					buttonText: "{{ trans("calendar.views.listYear") }}"
				}
			},
			eventClick: function(event, jsEvent, view) {
				if (view.type.indexOf("list") === -1) {
					let $this = $(this);
					$this.popover({
						html: true,
						title: event.title,
						placement: 'top',
						container: 'body',
						trigger: 'focus',
						content: ((event.location !== undefined) ? '<i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> ' + event.location + '<br>' : '') + decodeHtmlSpecialCHars(event.description),
					}).popover('show');
				}
				return false;
			},
			// eventMouseout: function(event, jsEvent, view) {
			// 	let $this = $(this);
			// 	$this.popover('hide');
			// 	return false;
			// }
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